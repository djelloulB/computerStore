# Exercices Php

Utiliser la commande `git clone` pour récupérer ce projet sur votre machine et commencer à travailler.

Je vous conseille de créer une branche pour chaque exercice (une branche pour l'exercice 1, une autre pour l'exercice 2, etc). Pour avoir une correction, créez une Pull Request et assignez `@Dreeckan` en tant que reviewer. Si besoin, ajoutez-moi sur votre projet.

## 1. Créer et utiliser un objet

- [ ] Créer un fichier `includes/autoload.php` avec ce contenu :
```php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP 
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});
```
- [ ] Inclure ce fichier dans `index.php` et ajouter un commentaire pour expliquer à quoi sert la fonction `spl_autoload_register`

- [ ] Créer une classe `Computer` (fichier `classes/Computer.php`)
- [ ] Ajouter les propriétés :
  - [ ] `components` (composants) de type array
  - [ ] `devices` (périphériques) de type array
  - [ ] `name` de type string
- [ ] Créer une instance de l'objet `Computer` dans `index.php`
- [ ] Donner des valeurs aux différentes propriétés de votre objet
- [ ] Afficher le contenu de votre objet avec la fonction `var_dump()`

### 1.1 Utiliser des getters et des setters

- [ ] Dans l'objet `Computer`, passer toutes les propriétés en `protected`
- [ ] Ajouter les méthodes "getters" :
  - [ ] `getComponents()` qui renvoie le contenu de la propriété `components`
  - [ ] `getDevices()` qui renvoie le contenu de la propriété `devices`
  - [ ] `getName()` qui renvoie le contenu de la propriété `name`
- [ ] Ajouter les méthodes "setters" :
  - [ ] `setComponents($components)` qui met à jour le contenu de la propriété `components` à partir de la variable `$components`
  - [ ] `setDevices($devices)` qui met à jour le contenu de la propriété `devices` à partir de la variable `$devices`
  - [ ] `setName($name)` qui met à jour le contenu de la propriété `name` à partir de la variable `$name`
- [ ] Mettre à jour votre fichier `index.php` pour en conserver le fonctionnement

### 1.2. Espaces de nom et rangement

- [ ] Créer un dossier `Computer` dans le dossier `classes`
- [ ] Créer une classe `Desktop` (ordinateur fixe de type "tour") dans le fichier `Computer/Desktop.php`
- [ ] Ajouter le `namespace` de cette classe
- [ ] Faire en sorte que la classe `Desktop` étende la classe `Computer` (vous aurez également besoin d'appeler la classe `Computer` avec `use Computer`, juste après le namespace)
- [ ] Dans index.php, créer un objet de type `Desktop` (utiliser également un `use` ou l'appeler par son nom complet `Computer\Desktop`) et vérifier qu'il ait les même propriétés et méthodes que l'objet Computer
- [ ] Donner des valeurs aux différentes propriétés de votre objet
- [ ] Afficher le contenu de votre objet avec la fonction `var_dump()`

- [ ] Sur le même modèle, créer les classes `Laptop` (ordinateur portable) et `Tablet` (tablette)
- [ ] Créer / Instancier des objets de ces deux types dans `index.php` et en afficher le contenu avec `var_dump()`

## 2. Classes abstraites

- [ ] Rendre la classe `Computer` abstraite (ajouter le mot-clé `abstract` à la déclaration de la classe)
- [ ] Constater l'erreur dans le fichier `index.php`
- [ ] Enlever l'objet de type `Computer` de vos tests. Il n'est maintenant plus possible d'instancier d'objets `Computer` et il faut désormais utiliser une classe *concrète* pour créer des ordinateurs

- Créer les dossiers et les fichiers des composants
  - [ ] Créer le fichier `Component/AbstractComponent.php` et la classe abstraite `AbstractComponent`
  - [ ] Y ajouter les propriétés `name` et `brand`, de type string.
  - [ ] Ajouter les getters et les setters
  - [ ] Créer les fichiers `Component/MotherBoard.php` (carte mère), `Component/Ram.php` (mémoire vive), `Component/Cpu.php` (processeur), `Component/GraphicCard.php` (carte graphique)
  - [ ] Créer les classes correspondantes et les faire étendre `AbstractComponent`
  - [ ] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setComponents()` de vos objets ordinateurs

- Créer les dossiers et les fichiers des périphériques
  - [ ] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [ ] Y ajouter les propriétés `name` et `brand`, de type string.
  - [ ] Ajouter les getters et les setters
  - [ ] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [ ] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [ ] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs
  - [ ] Constater le résultat avec un `var_dump()` pour chacun de vos objets ordinateurs

## 3. Interfaces

- Nous allons ajouter une interface pour nous assurer que nos ordinateurs, nos composants et nos périphériques aient certaines méthodes qui vont nous être nécessaires.
  - [ ] Créer une branche `votreNom-exo-3`
  - [ ] Créer le dossier `classes/Interfaces`, nous allons y ajouter nos interfaces
  - [ ] Y créer le fichier `HasNameInterface.php` et l'interface `HasNameInterface`
    - [ ] Les objets qui implémentent cette interface doivent implémenter la méthode `getName` avec la signature suivante `public function getName(): ?string`
    - [ ] Et la méthode `setName` avec la signature suivante `public function setName(?string $name): HasNameInterface`
    - [ ] Ajouter le `implements HasNameInterface` dans vos classes `AbstractDevice`, `Computer` et `AbstractComponent` (attention au `namespace` et au `use`)
    - [ ] Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
    
  - [ ] Sur le même modèle, créer le fichier `HasBrandInterface.php` et l'interface `HasBrandInterface` avec les méthodes :
    - [ ] `getBrand` avec la signature `public function getBrand(): ?string`
    - [ ] `setBrand` avec la signature `public function setBrand(?string $brand): HasBrandInterface`
    - [ ] Ajouter le `implements HasBrandInterface` dans vos classes `AbstractDevice` et `AbstractComponent` (attention au `namespace` et au `use`)
    - [ ] Vous devriez voir des erreurs apparaitre (dans VS Code ou votre navigateur). Il s'agit maintenant de les corriger avec ce que vous avez appris dans les exercices précédents ;).
    
  - [ ] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github
  
## 4. Traits

- Maintenant que nous avons forcé nos objets à avoir certaines méthodes, nous allons simplifier l'implémentation de ces méthodes en utilisant des traits (en somme, nous regroupons le code que nous avons écrit plusieurs fois et que nous avons forcé à être identique d'un fichier à l'autre)
  - [ ] Créer une branche `votreNom-exo-4`
  - [ ] Créer le dossier `classes/Traits`, nous allons y ranger nos traits.
  - [ ] Y créer le fichier `HasNameTrait.php` et le trait `HasNameTrait`
    - [ ] Y déplacer la déclaration de la propriété `$name`
    - [ ] Y déplacer la déclaration de la méthode `getName`
    - [ ] Y déplacer la déclaration de la méthode `setName`
    - [ ] Appeler le trait `HasNameTrait` dans les classes `AbstractDevice`, `Computer` et `AbstractComponent` (attention aux `namespace` et aux `use`)
    - [ ] Supprimer les autres déclaration de la propriété `$name` et des méthodes `getName`et `setName`
    - [ ] Vérifier que votre code fonctionne toujours (et corriger si besoin)
    
  - [ ] Sur le même modèle créer le fichier `HasBrandTrait.php` et le trait `HasBrandTrait`
    - [ ] Y déplacer la déclaration de la propriété `$brand`
    - [ ] Y déplacer la déclaration de la méthode `getBrand`
    - [ ] Y déplacer la déclaration de la méthode `setBrand`
    - [ ] Appeler le trait `HasBrandTrait` dans les classes `AbstractDevice` et `AbstractComponent` (attention aux `namespace` et aux `use`)
    - [ ] Supprimer les autres déclaration de la propriété `$brand` et des méthodes `getBrand`et `setBrand`
    - [ ] Vérifier que votre code fonctionne toujours (et corriger si besoin)
    
  - [ ] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github
  
## 5. instanceof et validation de données

- Nos objets sont maintenant plus courts et nous avons évité de dupliquer du code, nous pouvons commencer à ajouter d'autres éléments fonctionnels. Dans un premier temps, nous allons ajouter un objet de validation de nos objets de type `Computer`.
  - [ ] Créer une branche `votreNom-exo-5`
  - [ ] Ajouter une interface `ValidatorInterface` dans le dossier `Interfaces`
  - [ ] Ajouter la signature suivante, qui va devoir être respectée par nos validateurs : `public function validate(Computer $computer): bool;`
  - [ ] Créer le dossier `classes/Validator`, nous allons y ranger nos validateurs.
  - [ ] Créer un fichier `ComputerValidator.php` dans ce dossier et créer la classe `ComputerValidator`
  - [ ] Cette classe doit implémenter l'interface `ValidatorInterface` et avoir la méthode correspondante
  - [ ] Dans cette méthode `validate`, dont le premier paramètre est un objet de type `Computer`, nous allons vérifier :
    - Que le computer passé en paramètre contienne dans ses composants :
      - [ ] un objet `MotherBoard`,
      - [ ] un objet `Ram`, 
      - [ ] un objet `Cpu`,
      - [ ] et 0 ou un objet `GraphicCard`
    - Que le computer passé en paramètre contienne dans ses périphériques :
      - [ ] un objet `Keyboard`,
      - [ ] un objet `Mouse`, 
      - [ ] 0 ou un objet `Speaker`
  - [ ] Instancier ce validateur dans `index.php` et utiliser la méthode `validate` sur vos différents ordinateurs pour vérifier qu'ils sont valides
  - [ ] Faire en sorte d'avoir au moins un ordinateur qui ne soit pas valide
  - [ ] Si ça n'est pas déjà fait, créer un ou des commits dans votre branche, pusher et créer une PR (Pull Request) sur Github. Utiliser votre branche de l'exercice 4 comme base (plutôt que `main`)
  
## 6. Serialisation

- Nous avons un outil de validation de nos ordinateurs, il va nous falloir d'autres outils dans la vie de ce projet, avant d'utiliser un framework. Un outil qui va nous servir plus tard, la sérialisation : l'art de convertir un objet PHP en un format de communication avec d'autres langages / technologies. Nous allons faire en sorte de convertir nos objets PHP au format JSON (et préparer un peu le terrain pour la partie sur les WebServices ;) ).
  - [ ] Implémenter l'interface [JsonSerializable](https://www.php.net/manual/fr/class.jsonserializable.php) dans les objets `Computer`, `AbstractComponent` et `AbstractDevice`. 
    - [ ] En plus d'ajouter le `implements`, il faut également implémenter la méthode `jsonSerialize()` pour décomposer nos objets en tableaux (associatifs).
  - [ ] Ajouter des propriétés supplémentaires dans les différents composants et périphériques et surcharger la méthode `jsonSerialize()` pour ces objets. [Un exemple de méthode surchargée est présente dans les slides](http://formation-hb.drakolab.fr/php/3-objet.html#14) ou [l'exemple 3 de cette documentation](https://www.php.net/manual/fr/language.oop5.paamayim-nekudotayim.php)
    - [ ] Ajouter l'attribut `$frequency` (float) à la class `Cpu`, avec son getter et son setter
    - [ ] Ajouter l'attribut `$rtx` (boolean) à la class `GraphicCard`, avec son getter et son setter
    - [ ] Ajouter l'attribut `$chipset` (string|null) à la class `MotherBoard`, avec son getter et son setter
    - [ ] Ajouter l'attribut `$size` (integer) à la class `Ram`, avec son getter et son setter
    - [ ] Ajouter l'attribut `$format` (string) (ex: `AZERTY`) à la class `Keyboard`, avec son getter et son setter
    - [ ] Ajouter l'attribut `$leftHanded` (boolean) à la class `Mouse`, avec son getter et son setter
    - [ ] Ajouter l'attribut `$countSpeakers` (float) à la class `Speaker`, avec son getter et son setter
    - [ ] Mettre à jour les méthodes `jsonSerialize()` de ces classes
  - [ ] Tester que la sérialisation fonctionne en utilisant la fonction `json_encode()` sur vos objets `Computer` (vous devez avoir toutes les informations de vos objets) (faites un `echo` ou un `var_dump()` du résultat).
  