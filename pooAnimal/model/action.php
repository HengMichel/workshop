<!-- dans action.php
inclure le fichier utilisateur.php
récupérer les informations du formulaire
appeler la méthode inscription pour enregistrer les données dans la bd -->
<?php
session_start();
require_once "../user.php"; 
require_once "../inc/database.php";
require_once "../inc/functions.php";

if(isset($_POST["co"])){
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // creer un nouveau utilisateur
    // créer une instance de la classe Utilisateur
    $password = password_hash($password,PASSWORD_DEFAULT); 
    $user1 = new User($firstname,$lastname,$email,$password);
    $user1->inscription();
  
}

require_once "AnimalRepository.php"; 

if(isset($_POST["submit"])){
    //debugDie() permet de vérifier si les données ont été pris en compte sous forme d1 table associative
    // debugDie($_POST);
    // debug($_GET);
    
    $breed = htmlspecialchars($_POST["breed"]);
    $name = htmlspecialchars($_POST["name"]);
    $type = htmlspecialchars($_POST["type"]);
    
    // creer un nouveau utilisateur
    // créer une instance de la classe Utilisateur
    $animal = new AnimalRepository($breed,$name,$type);
    $animal->insert();
    
}





if(isset($_POST['connexion'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // appel de la methode statique connexion
    User::connexion($email,$password);
}

?>