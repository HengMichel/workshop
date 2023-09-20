<?php 
require_once "inc/header.php";
require_once "../models/actorModel.php";
$listActor = Actor::findAllActors();
?>  

    <div class="container d-flex flex-wrap justify-content-around  border-danger bg-success-subtle  " >
        <div class="row">
            <?php foreach($listActor as $actor) { ?>

                <!-- Utilisez la classe col-* pour définir la largeur de chaque carte -->
                <div class="col-4 mb-3"> 
    
                     <div class="card border-warning" style="width: 100%;">
                        <div class="card-body bg-danger-subtle link-success-subtle" >
                            <h1 class="card-title link-success "><?= $actor['name_actor'];?></h1>           
                            <h2 class="card-title link-danger"><?= $actor['email'];?></h2>

                            <a class=" btn btn-info bg-success link-warning border-warning" href="../traitement/action.php?actor=<?=$actor['id'];?>">Add Actor</a>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php 
require_once "./inc/footer.php"; 
?>