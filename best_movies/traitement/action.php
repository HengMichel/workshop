<?php 
session_start();
require_once "../models/actorModel.php";
require_once "../models/movieModel.php";

if(isset($_POST['add_actors'])){
     // recuperer les infos saisies par l utilisateur
     $name_actor = htmlspecialchars($_POST["name_actor"]);
     $email = htmlspecialchars($_POST["email"]);

    // appeler la méthode inscription de la classe Actor
    // la méthode inscription étant static donc utilise le nom de la classe suivit de "::" 
    // ensuite le nom de la méthode qui est inscription
    Actor::addActor($name_actor,$email);
}

if(isset($_POST['add_movies'])){
    $title = htmlspecialchars($_POST['title']);
    $number_main_actors = htmlspecialchars($_POST['number_main_actors']);
    $number_total_actors = htmlspecialchars($_POST['number_total_actors']);

     // appeler la méthode connexion de la classe User
    // la méthode connexion étant static donc utilise le nom de la classe suivit de "::"
    //  ensuite le nom de la méthode qui est connexion
    Movie::addMovie($title,$number_main_actors,$number_total_actors);
}


?>