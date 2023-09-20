<?php 
require_once "./inc/header.php";
require_once "../models/movieModel.php";
$listMovie = Movie::findAllMovies();
?>  
    <div class="container d-flex flex-wrap justify-content-around  border-danger bg-success-subtle  " >
        <div class="row">
            <?php foreach($listMovie as $movie) { ?>

                <!-- Utilisez la classe col-* pour définir la largeur de chaque carte -->
                <div class="col-4 mb-3">    
                     <div class="card border-warning" style="width: 100%;">
                        <div class="card-body bg-danger-subtle link-success-subtle" >
                            <h1 class="card-title link-success "><?= $movie['title'];?></h1>           
                            <h2 class="card-title link-danger"><?= $movie['number_main_actors'];?></h2>
                            <h3 class="card-title link-danger"><?= $movie['number_total_actors'];?></h3>

                            <a class=" btn btn-info bg-success link-warning border-warning" href="../traitement/action.php?movie=<?=$movie['id'];?>">Add Movie</a>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php 
require_once "inc/footer.php"; 
?>