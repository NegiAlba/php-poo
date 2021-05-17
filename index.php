<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours de PHP POO</title>
</head>

<body>
    <h1>Introduction à la Programmation Orientée Objet </h1>
    <h2>Les classes et les objets</h2>
    <p>Les classes sont des blocs de codes qui possèdent des variables et des fonctions qui vont permettre de structurer l'ensemble du projet sous formes d'objets.</p>
    <p>Dans la POO et à l'intérieur des classes et des objets, les variables s'appellent des <strong>propriétés</strong> et les fonctions s'appellent des <strong>méthodes</strong> </p>


    <?php require 'Animal.class.php';

    //* Après avoir récupéré notre  classe, nous allons instancier la classe Animal à l'aide de la syntaxe new Animal() qui va nous permettre de générer 2 nouveaux objets.

    //? La méthode n°1 pour affecter des valeurs aux propriétés des objets présente tous les inconvénients qui rendent la POO inutile : Ce n'est pas sécurisé, et le code n'est pas scalable  
    //? (DRY : Don't Repeat Yourself - WET : Write Everything Twice (not Thrice)) .
    // $animal1 = new Animal();
    // $animal1->espece = "Dauphin";
    // $animal1->nom = "Flipper le Dauphin";
    // $animal1->nb_de_pattes = 0;

    $animal1 = new Animal();
    $animal1->espece = "Dauphin";
    $animal1->nom = "Flipper le Dauphin";
    $animal1->nb_de_pattes = 0;

    echo $animal1->espece;
    echo $animal1->nom;

    $animal2 = new Animal();
    $animal2->espece = "Dinosaure";
    $animal2->nom = "Denver le dernier dinosaure";
    $animal2->nb_de_pattes = "2 pattes et 2 moignons";

    // print_r($animal1);
    // echo '<br>';
    // print_r($animal2);

    ?>

</body>

</html>