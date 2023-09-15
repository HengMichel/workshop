<!-- dans database.php -->
<!-- créer la classe DBConnect permettant se connecter à la base de donnée -->
<?php

class dbConnect{
    public function dbConnexion(){
        $connexion = null;
        try {
            $connexion = new PDO("mysql:host=localhost;dbname=pet_shop","root","");

            // vérifier la connexion
            // debug($connexion);
            // die("ok");
        } catch (PDOException $e) {
            $connexion = $e->getMessage();
        }
        return $connexion;
    }
}
?>