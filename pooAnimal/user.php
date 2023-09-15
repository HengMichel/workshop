 <!-- dans user.php -->
 <?php 

require_once "inc/database.php";

// créer la classe User avec les propriétés: 
// nom, prénom, émail, mot de passe 
class User{
    // attributs
    private $lastname;
    private $firstname;
    private $email;
    private $password;

    // constructeur
    public function __construct($firstname,$lastname,$email,$password)
    {
        $this->lastname = $lastname; 
        $this->firstname = $firstname; 
        $this->email = $email; 
        $this->password = $password; 
    }

    // les méthodes : s'inscrire, se connecter, se déconnnecter

    public function inscription(){
        // créer une instance db
        $db = new dbConnect();

        // se connecter à la bd
        $connexion=$db->dbConnexion();

        // préparer la requête
        $request = $connexion->prepare("INSERT INTO user (lastname,firstname,email,password) VALUES (?,?,?,?)");

        try {
            // éxecuter la requête
            $request->execute(array($this->lastname,$this->firstname,$this->email,$this->password));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



    // les changements fait pour utiliser le constructor
    // public function inscription(){

        // creer une instance DbConnect
        // $dbConnect = new DbConnect();

        // se conecter a la bd
        // $db = $dbConnect->dbConnexion(); // methode 1
        // $db = $dbConnect->connexioDataBase; // methode 2

        // preparer la requete
        // $request = $db->prepare("INSERT INTO `utilisateurs`(`nom`, `prenom`, `email`, `mdp`) VALUES (?,?,?,?)");
        // try{

        // executer la requete
    //     $request->execute(array($this->nom, $this->prenom, $this->email, $this->mdp));
    //     }catch(PDOException $e){
    //     echo $e->getMessage();
    //     }
    //     }
        
    //    }


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
                if(password_verify($password, $user['mdp'])){

                    // création es variables de session et redirection vers la bonne page
                    $_SESSION['lastname'] = $user['lastname'];
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