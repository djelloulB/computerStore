<?php

use Computer\Desktop;

require('includes/autoload.php');



$components = [
    'Disque dur',
    'CPU'
];

$devices = [
    'imprimante',
    'Casque audio',
    'clavier'
];

$myComputer = new Computer();
// cette methode ajoute un tableau
$myComputer->setComponents($components);
//cette methode ajout un composant
$myComputer->addComponent('Carte mère');
$myComputer->setDevices($devices);
$myComputer->setDevices(['souris']);

$myComputer->setName('Asus');

var_dump($myComputer);

$myDesktop = new Desktop();

$myDesktop->setDevices($devices);
$myDesktop->setName('Dell');
var_dump($myDesktop);
