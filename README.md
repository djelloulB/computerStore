# Exercices Php

Utiliser la commande `git clone` pour récupérer ce projet sur votre machine et commencer à travailler.

Je vous conseille de créer une branche pour chaque exercice (une branche pour l'exercice 1, une autre pour l'exercice 2, etc). Pour avoir une correction, créez une Pull Request et assignez `@Dreeckan` en tant que reviewer. Si besoin, ajoutez-moi sur votre projet.

## 1. Créer et utiliser un objet

- [ ] Créer un fichier `includes/autoload.php` avec ce contenu :
```php
spl_autoload_register(function ($class) {
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

- [ ] Créer un dossier `Computer`
- [ ] Créer une classe `Desktop` (ordinateur fixe de type "tour") dans le fichier `Computer/Desktop.php`
- [ ] Ajouter le `namespace` de cette classe
- [ ] Faire en sorte que la classe `Desktop` étende la classe `Computer`
- [ ] Dans index.php, créer un objet de type `Desktop` et vérifier qu'il ait les même propriétés et méthodes que l'objet Computer (et lui donner des valeurs différentes)
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

- Créer les dossiers et les fichiers des composants et des périphériques
  - [ ] Créer le fichier `Device/AbstractDevice.php` et la classe abstraite `AbstractDevice`
  - [ ] Y ajouter les propriétés `name` et `brand`, de type string.
  - [ ] Ajouter les getters et les setters
  - [ ] Créer les fichiers `Device/Keyboard.php` (clavier), `Device/Mouse.php` (souris), `Device/Speaker.php` (enceintes)
  - [ ] Créer les classes correspondantes et les faire étendre `AbstractDevice`
  - [ ] Instancier des objets dans `index.php` et les ajouter à des ordinateurs des trois types dans `index.php`, grâce à la méthode `setDevices()` de vos objets ordinateurs

