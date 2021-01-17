# Exercices Php

## Créer et utiliser un objet

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

## Utiliser des getters et des setters

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