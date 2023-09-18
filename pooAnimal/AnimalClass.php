 <!-- dans utilisateur.php -->
 <?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/inc/database.php";

// require_once $_SERVER["DOCUMENT_ROOT"]."/pooAnimal/inc/database.php";

// créer la classe Utilisateur avec les propriétés: 
// nom, prénom, émail, mot de passe 
class Animal{
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

    public function getId(){
        return $this->id;
    }

    public function getBreed() {
        return $this->breed;
    }
    
    public function setBreed($breed): self {
        $this->breed = $breed;
        return $this;
    }

    public function getName() {
        return $this->name;
    }
 
    public function setName($name): self {
        $this->name = $name;
        return $this;
    }
 
    public function getType() {
        return $this->type;
    }
    
 
    public function setType($type): self {
        $this->type = $type;
        return $this;
    }
    


    // une methode statique est une méthode qui appartient à la classe elle même et pas aux instances de cette classe
    // une méthode statitique peut être éxécuter sans instancier la classe qui l'encapsule
    // methode connexion
    public static function connexion($email,$password){

        // créer une instance de la classe dbConnect
        $dbConnect = new dbConnect();
        $db = $dbConnect->dbConnexion();    

        // préparer la requête
        $request = $db->prepare("SELECT * FROM user WHERE email = ?");

        // exécuter la requête
        try {
            $request->execute(array($email));
            $user = $request->fetch();

            // si $user est vide
            if(empty($user)){
                echo "utilisateur inconnue";

            // sinon
            }else{
                if(password_verify($password, $user['password'])){

                    // création es variables de session et redirection vers la bonne page
                    $_SESSION['lastname'] = $user['firstname'];
                    header("Location: accueil.php");
                }else{
                    echo "mot de passe incorrect";
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    
    }
}



?>