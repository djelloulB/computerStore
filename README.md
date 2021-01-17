# Exercices Php

Pour utiliser ce projet, créez-en un fork (Aller sur [le projet](https://github.com/Dreeckan/exercices-php) et cliquez sur le bouton "fork", en haut à droite de la page). 
Vous pouvez ensuite utiliser la commande `git clone` pour récupérer ce projet sur votre machine et commencer à travailler.

Je vous conseille de créer une branche pour chaque exercice (une branche pour l'exercice 1, une autre pour l'exercice 2, etc). Pour avoir une correction, créez une Pull Request et assignez `@Dreeckan` en tant que reviewer. Si besoin, ajoutez-moi sur votre projet.

## 1. Créer et utiliser un objet

- [ ] Créer une classe `Student` (fichier `classes/Student.php`)
- [ ] Ajouter les propriétés :
  - [ ] `number` de type string
  - [ ] `name` de type string
  - [ ] `firstname` de type string
- [ ] Créer un fichier `includes/autoload.php` avec ce contenu :
```php
spl_autoload_register(function ($class) {
    require_once "classes/$class.php";
});
```
- [ ] Inclure ce fichier dans `index.php` et ajouter un commentaire pour expliquer à quoi sert la fonction `spl_autoload_register`
- [ ] Créer une instance de l'objet `Student` dans `index.php`
- [ ] Donner des valeurs aux différentes propriétés de votre objet
- [ ] Afficher le contenu de votre objet avec la fonction `var_dump()`

### 1.1 Utiliser des getters et des setters

- [ ] Dans l'objet `Student`, passer toutes les propriétés en `protected`
- [ ] Ajouter les méthodes "getters" :
  - [ ] `getNumber()` qui renvoie le contenu de la propriété `number`
  - [ ] `getName()` qui renvoie le contenu de la propriété `name`
  - [ ] `getFirstName()` qui renvoie le contenu de la propriété `firstname`
- [ ] Ajouter les méthodes "setters" :
  - [ ] `setNumber($number)` qui met à jour le contenu de la propriété `number` à partir de la variable `$number`
  - [ ] `setName($name)` qui met à jour le contenu de la propriété `name` à partir de la variable `$name`
  - [ ] `setFirstName($firstname)` qui met à jour le contenu de la propriété `firstname` à partir de la variable `$firstname`
- [ ] Mettre à jour votre fichier `index.php` pour en conserver le fonctionnement