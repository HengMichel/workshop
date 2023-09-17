<?php 
require_once  "./inc/database.php";
// require_once $_SERVER["DOCUMENT_ROOT"]."./inc/database.php";

class AnimalRepository{
    // attributs

    private $id;
    private $breed;
    private $name;
    private $type;
    
    // constructeur
    public function __construct($breed,$name,$type)
       {
           $this->breed = $breed; 
           $this->name = $name; 
           $this->type = $type; 
       }

    public function insert(){
          // les méthodes : s'inscrire, se connecter, se déconnnecter

        // créer une instance db
        $db = new dbConnect();
        // permet de verifier si la co est ok
        // debugDie($db);

        // se connecter à la bd
        $connexion=$db->dbConnexion();

        // préparer la requête
        $request = $connexion->prepare("INSERT INTO animal (breed,name,type) VALUES (?,?,?)");

        try {
            // éxecuter la requête
            $request->execute(array($this->breed,$this->name,$this->type));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function findAll(){

        $db = new dbConnect();
        $connexion = $db->dbConnexion();
        $connexionRequest = $connexion->prepare("SELECT * FROM animal");
        
        $animaux = null;

        // exécuter la requête
        try {
            $connexionRequest->execute();
            $animaux = $connexionRequest->fetchall(PDO::FETCH_ASSOC);
           
        } catch (PDOException $e) {
            echo $e->getMessage();
        }return $animaux;

        // récupérer le résultat de la requête 
        // debugDie($animaux);
    }

    }







?>