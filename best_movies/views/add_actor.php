<?php 
require_once "inc/header.php"; 
?>

<div class="container">
    <form action="../traitement/action.php" method="post">
        <div class="form-group link-light">
            <label >Name Actor:</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="name_actor" >
        </div>

        <div class="form-group link-light mt-3">
            <label >email :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="email" >
        </div>
 
        <button class="btn btn-primary mt-5 mb-5 border-success-subtle bg-secondary border-2" name="add_actors" value="submit">Add Actor</button>
    </form>
</div>

<?php include_once "inc/footer.php"; ?>