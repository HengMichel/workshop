<?php 
require_once  $_SERVER["DOCUMENT_ROOT"]."/workshop/best_movies/models/database.php";
// require_once "./database.php";

class Actor{
    public static function addActor($name_actor,$email){

        // se connecter à la data base
        $db = Database::dbConnect();

        // préparer la requête
        $request = $db->prepare("INSERT INTO actor (name,email) VALUES (?,?)");

        // éxécution de la requête
        
        try {
            $request->execute(array($name_actor,$email));

            header("Location: http://localhost/workshop/best_movies/views/list_actor.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
   
    public static function findAllActors(){

        // se connecter à la data base
        $db = Database::dbConnect();

        // préparer la requête
        $request = $db->prepare("SELECT * actor (id,name,email) VALUES (?,?,?)");

        // éxécution de la requête
        $listActor = null;
        try {
            $listActor = $request->fetchAll(PDO::FETCH_ASSOC);

            header("Location: http://localhost/workshop/best_movies/views/list_actor.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $listActor;
    }


}
?>