<?php 
require_once  $_SERVER["DOCUMENT_ROOT"]."/workshop/best_movies/models/database.php";
// require_once "database.php";

class Movie{
    public static function addMovie($title,$number_main_actors,$number_total_actors){

        // se connecter à la data base
        $db = Database::dbConnect();

        // préparer la requête
        $request = $db->prepare("INSERT INTO movie (title,number_main_actors,number_total_actors) VALUES (?,?,?)");

        // éxécution de la requête
        try {
            $request->execute(array($title,$number_main_actors,$number_total_actors));

            header("Location: http://localhost/workshop/best_movies/views/list_movie.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

   
    public static function findAllMovies(){

        // se connecter à la data base
        $db = Database::dbConnect();

        // préparer la requête
        $request = $db->prepare("SELECT * movie (title,number_main_actors,number_total_actors) VALUES (?,?,?)");

        // éxécution de la requête
        $listMovie = null;
        try {
            $listMovie = $request->fetchAll(PDO::FETCH_ASSOC);

            header("Location: http://localhost/workshop/best_movies/views/list_movie.php");

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $listMovie;
    }

}
?>