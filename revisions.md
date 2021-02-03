# Révisions

Cette section est dédiée à réviser tout ce qu'on a vu dans les leçons de PHP (procédural, documentation et objet). Nous allons créer / modifier beaucoup de fichiers et faire différents commits. Nous allons faire tout ça dans **une seule** branche `votreNom-revisions` (et, du coup, tout mettre dans une seule Pull Request).

## 1. Html, PHP et tableaux

Modifier le fichier `1-html.php`. ce fichier contient un tableau PHP. 

- [ ] Afficher son contenu dans un tableau (balise `<table>`). Pour cela, utiliser une boucle `foreach`.
- Le tableau doit avoir 3 colonnes
  - [ ] Nom des chaussures
  - [ ] Prix (en euros)
  - [ ] Nombre en stock
- [ ] S'il en reste moins de 20 en stock, afficher le texte de **toute** la ligne en rouge
- Aujourd'hui, il y a une réduction de 10% sur toutes les chaussures de plus de 100€ ! 
  - [ ] Faire une fonction (dans ce même fichier) qui va appliquer un taux de réduction à un prix (ces deux informations vont être passés en paramètres).
  - [ ] Dans ce cas, afficher les deux prix pour signaler la réduction
- [ ] Afficher tous les prix avec le format français (ex : 12,45€) grâce à la fonction `number_format()` ([dont la documentation est ici](https://php.net/manual/fr/function.number-format.php))
- [ ] Ajouter un lien sur chaque nom de chaussure. Ce lien pointe vers la page `2-superglobales.php` et ajouter un paramètre `stock` dans l'url, avec comme valeur, le stock en cours de cette chaussure.
- [ ] Faire un commit

## 2. Les variables superglobales

Modifier le fichier `2-superglobales.php`.

- [ ] Récupérer la valeur de `stock` contenu dans l'url.
- [ ] Si elle est vide, rediriger vers la page `1-html.php` (fonction `header()`)
- [ ] Sinon, la mettre dans une variable `stock` en session.
- [ ] Afficher un formulaire, avec 2 champs
  - [ ] Quantité (un nombre entier)
  - [ ] Email (champ de type email)
- [ ] L'action de ce formulaire **DOIT** contenir le paramètre stock
- [ ] Vérifier que la quantité entrée est inférieure ou égale au paramètre `stock` de l'url
  - [ ] Si ça n'est pas le cas, afficher un message d'erreur : "Il n'y a pas assez de stock pour répondre à votre demande"
- [ ] Vérifier que l'email entré est valide en utilisant la fonction `filter_var` ([dont la documentation est ici](https://www.php.net/manual/fr/function.filter-var))
  - [ ] Si ça n'est pas le cas, afficher un message d'erreur : "Veuillez entrer un email valide"
- [ ] Si les deux champs sont valides, ajouter leurs valeurs dans la session (`quantity` et `email`)
- [ ] Faire un commit

## 3. Concevoir des fonctions

- [ ] Créer une fonction `division` qui :
  - [ ] prend 2 nombres en paramètres : le diviseur (nombre entier) et le divisé (nombre entier),
  - [ ] renvoie le résultat du calcul : `divisé / diviseur`
  - [ ] renvoie `false` si le paramètre diviseur vaut 0
- [ ] Créer une fonction `factorielle` (voir [l'article Wikipedia pour le calcul](https://fr.wikipedia.org/wiki/Factorielle)) qui calcule la factorielle jusqu'au paramètre donné
  - [ ] prend le paramètre `number` (nombre entier)
  - [ ] renvoie le résultat du calcul de la factorielle (si number vaut 0, renvoyer 1)
  - [ ] indice : vous n'êtes pas obligés d'utiliser une méthode récursive ;) 
- [ ] faire des appels dans le fichier `3-fonctions.php` pour vérifier les résultats et les afficher (utiliser la fonction `var_dump()` pour afficher les résultats plus clairement)
- [ ] Faire un commit

## 4. Lire du code existant

Ne pas exécuter le fichier `4-debug.php` dans Wamp ou Mamp. Ils risquent de faire planter votre machine.

- [ ] Dans la première partie du fichier `4-debug.php` se cachent plusieurs fautes, erreurs ou mauvaises pratiques. Les corriger dans le fichier `4-debug.php`.
- Dans la deuxième partie du fichier, donner les résultats des appels des fonctions :
  - [ ] remplacer les commentaires `Votre réponse ici` par votre réponse
  - [ ] s'ils renvoient une erreur, marquer "une erreur" et expliquer pourquoi avec vos mots
- [ ] Faire un commit


## 5. Objets

- Écrire une classe abstraite `AbstractBook` (créer le fichier dans le dossier `classes`) ayant ces propriétés (avec la visibilité `protected`)
  - [ ] `countPages` un entier
  - [ ] `isbn` une chaine de caractère
  - [ ] `title` une chaine de caractère
- [ ] En commentaire de la classe, expliquer avec vos mots ce qu'est une classe abstraite
- [ ] Écrire les getters et les setters de ces propriétés
- [ ] Ajouter des annotations (commentaires) aux propriétés et aux méthodes
- [ ] Créer 2 classes héritant de `AbstractBook`: `ComicBook` et `Book`
- Dans `Book` :
  - [ ] Surcharger le constructeur du parent pour que `countPages` soit égal à `200` par défaut
- Dans `ComicBook` :
  - [ ] Surcharger le constructeur du parent pour que `countPages` soit égal à `152` par défaut
- Appeler ces deux classes dans `5-objets.php` et créer 2 instances de ces objets (une de `ComicBook` et une de `Book`) avec les valeurs suivantes :
  - Pour le `ComicBook` : 
    - [ ] `countPages` : 152
    - [ ] `isbn` : 9791026817710
    - [ ] `title` : `La chute de Tír na Nóg`
  - Pour le `Book` : 
    - [ ] `countPages` : 464
    - [ ] `isbn` : 9782940426379
    - [ ] `title` : `Caliban et la sorcière`
- [ ] Afficher le contenu des objets (avec un `echo`) sous la forme `TitreDuLivre (Isbn) : countPages pages <br />`
- [ ] Faire un commit

## 6. Questions de cours

Pour chacune des questions, cocher **la** case qui correspond (il y a toujours une seule bonne réponse). Pour cocher une cas, remplacer le `[ ]` à côté de la réponse voulue par `[x]`.
Pour tous les exemples utilisant des objets, nous partons du principe qu'il y a un fichier chargé de l'autoload (appel automatique de `require_once` sur les fichiers de nos classes) et qu'il fonctionne à tous les coups.

### 6.1. On peut utilise la pseudo-variable `$this` dans :

- [ ] une classe
- [ ] une fonction
- [ ] n'importe où dans le PHP

### 6.2. Une classe doit hériter :

- [ ] d'une ou plusieurs autres classes
- [ ] d'une autre classe
- [ ] de zéro ou une autre classe

### 6.2. Que renvoie le code suivant

```php
// Fichier Test.php
class Test {}

// Fichier index.php
$test = new Test();
var_dump($test instanceof Beanie);
```

- [ ] une erreur
- [ ] true
- [ ] false

### 6.3. Ce code plante, pourquoi ?

```php
// Fichier Test.php
abstract class Test 
{
    protected $test = 'un test';
     
    abstract public function getValue();
}

// Fichier Child.php
class Child extends Test
{
    public function getTest()
    {
        return $this->test;
    }
}
```

- [ ] La classe `Test` n'a pas de de méthode `getTest()`
- [ ] La propriété `test` n'est pas définie dans la classe `Child`
- [ ] la méthode `getValue()` n'est pas définie dans la classe `Child`

### 6.4. Ce code plante, pourquoi ?

```php
// Fichier Interfaces/Test.php
interface Test 
{
    public function getThing();
}

// Fichier Child.php
use Test;

class Child implements Test
{
    protected $thing;
    
    public function getThing()
    {
        return $this->thing;
    }
}
```

- [ ] Il manque un namespace à l'interface `Test`
- [ ] L'interface `Test` n'a pas de de méthode `getThing()`
- [ ] La propriété `thing` n'est pas définie dans l'interface `Test`

### 6.5. Commit

- [ ] Faites un commit