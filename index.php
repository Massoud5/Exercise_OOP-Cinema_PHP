<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise OOP-Cinema</title>
</head>
<body>

<?php

include("genre.php");
include("film.php");
include("personne.php");
include("realisateur.php");
include("role.php");
include("acteur.php");
include("casting.php");


$realisateur1 = new Realisateur("Miller", "George", "H", "1985-03-01");
$genre1= new Genre("action");

$acteur1 = new Acteur ("Gibson", "Mel", "H", "1956-01-03");   // "Max Rockatansky" Mad Max, "Max Rockatansky" Mad Max2, "Max Rockatansky" Mad Max (Beyond Thunderdome)
$acteur2 = new Acteur ("Keays-Byrne", "Hugh", "H", "1947-04-18");// "Toecutter"Mad Max, "Colonel Joe Moore" (Fury Road)
$acteur3 = new Acteur ("Samuel", "Joanne", "F", "1957-08-05"); // "Jessie Rockatansky" Mad Max
$acteur4 = new Acteur ("Minty", "Emil", "H", "1972-11-07");   // "enfant sauvage" Mad Max2
$acteur5 = new Acteur ("Spence", "Bruce", "H", "1945-09-17"); // "pilote de l'autogire" Mad Max2,"Jedediah" Mad Max (Beyond Thunderdome)
$acteur6 = new Acteur ("Turner", "Tina", "F", "1939-11-26");  // "Tante Entity" Mad Max (Beyond Thunderdome)
$acteur7 = new Acteur ("Hardy", "Tom", "H", "1977-09-15");   // "Max Rockatansky" Mad Max: Fury Road
$acteur8 = new Acteur ("Theron", "Charlize", "F", "1975-08-07");   // "Imperator Furiosa" Mad Max: Fury Road
$acteur9 = new Acteur ("Hoult", "Nicholas", "H", "1989-12-07");   // "Nux" Mad Max: Fury Road

$role1 = new Role ("Max Rockatansky");
$role2 = new Role ("Toecutter");
$role3 = new Role ("Jessie Rockatansky");
$role4 = new Role ("enfant sauvage");
$role5 = new Role ("pilote de l'autogire");
$role6 = new Role ("Jedediah");
$role7 = new Role ("Tante Entity");
$role8 = new Role ("Colonel Joe Moore");
$role9 = new Role ("Imperator Furiosa");
$role10 = new Role ("Nux");


$film1 = new Film("Mad Max", 1979, 93, $genre1, $realisateur1);
$film2 = new Film("Mad Max 2 (Le Défi)", 1981, 96, $genre1, $realisateur1);
$film3 = new Film("Mad Max (Beyond Thunderdome)", 1985, 107, $genre1, $realisateur1);
$film4 = new Film("Mad Max (Fury road)", 2015, 120, $genre1, $realisateur1);

$cast1 = new Casting ($film1, $acteur1 , $role1);
$cast2 = new Casting ($film1, $acteur2 , $role2);
$cast3 = new Casting ($film1, $acteur3 , $role3);
$cast4 = new Casting ($film2, $acteur1 , $role1);
$cast5 = new Casting ($film2, $acteur4 , $role4);
$cast6 = new Casting ($film2, $acteur5 , $role5);
$cast7 = new Casting ($film3, $acteur1 , $role1);
$cast8 = new Casting ($film3, $acteur5 , $role6);
$cast9 = new Casting ($film3, $acteur6 , $role7);
$cast10 = new Casting ($film4, $acteur7 , $role1);
$cast11 = new Casting ($film4, $acteur3 , $role8);
$cast12 = new Casting ($film4, $acteur8 , $role9);
$cast13 = new Casting ($film4, $acteur9 , $role10);


// var_dump($acteur1); // castFilmArr est sans valeur!!!

echo $cast1;
echo $cast2;
echo $cast3;
echo $cast4;




?>


</body>
</html>

<!--// $role1 -> addActorToRole($acteur7); 
    // $role1 -> addActorToRole($acteur1); 
    // $role2 -> addActorToRole($acteur2); 
    // $role3 -> addActorToRole($acteur2); 
    // $role4 -> addActorToRole($acteur3); 
    // $role5 -> addActorToRole($acteur4); 
    // $role6 -> addActorToRole($acteur5); 
    // $role7 -> addActorToRole($acteur5); 
    // $role8 -> addActorToRole($acteur6); 
    // $role9 -> addActorToRole($acteur8); 
    // $role10 -> addActorToRole($acteur9); 

    // $film1 -> addActorToFilm($acteur1);
    // $film1 -> addActorToFilm($acteur2);
    // $film1 -> addActorToFilm($acteur3);
    // $film2 -> addActorToFilm($acteur1);
    // $film2 -> addActorToFilm($acteur4);
    // $film2 -> addActorToFilm($acteur5);
    // $film3 -> addActorToFilm($acteur1);
    // $film3 -> addActorToFilm($acteur5);
    // $film3 -> addActorToFilm($acteur6);
    // $film4 -> addActorToFilm($acteur7);
    // $film4 -> addActorToFilm($acteur8);
    // $film4 -> addActorToFilm($acteur9);

    // echo $realisateur1 -> afficherFilmRealise();
    // echo $genre1 -> afficherFilmsParGenre();
    // echo $acteur1 -> afficherFilmographie();
    // echo $role1 -> afficherActeursDeRole();
-->