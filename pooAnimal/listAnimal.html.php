<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/AnimalClass.php";
// require_once "inc/functions.php";
require_once $_SERVER["DOCUMENT_ROOT"]."model/AnimalRepository.php";
// require_once "model/action.php";

// Créez une instance de la classe AnimalRepository
$animalRepo = new AnimalRepository($breed,$name,$type);

// $animaux = findAll();

// Appelez des méthodes de la classe AnimalRepository en fonction de vos besoins

$animaux = $animalRepo->findAll();

// Utilisez $animaux pour afficher ou manipuler les données




// Assurez-vous que les variables sont définies et ont des valeurs
// if (isset($breed) && isset($name) && isset($type)) {
    // Créez une instance de la classe AnimalRepository
    // $animalRepo = new AnimalRepository($breed, $name, $type);

    // Appelez des méthodes de la classe AnimalRepository en fonction de vos besoins
    // $animaux = $animalRepo->findAll();

    // Utilisez $animaux pour afficher ou manipuler les données
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>Liste des animaux</title>
</head>
<body class="bg-success">
    
    <div class="container">
        <form action="model/AnimalRepository.php" method="post">

            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="id_animal bg-secondary link-light">Id Animal</th>
                            <th class="breed bg-secondary link-light">Breed</th>
                            <th class="name bg-secondary link-light">Name</th>
                            <th class="type bg-secondary link-light">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($animaux as $animal){ ?>
                            <tr>
                                <td class="id border-success-subtle border-3 mt-2"><?= $animal["id"]; ?></td>
                        
                                <td class="breed border-success-subtle border-3 mt-2"><?= $animal["breed"]; ?></td>
                        
                                <td class="name border-success-subtle border-3 mt-2"><?= $animal["name"]; ?></td>
                        
                                <td class="type border-success-subtle border-3 mt-2"><?= $animal["type"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div> 
        </form>
    </div>
</body>
<?php 
?>
