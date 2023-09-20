<?php 
include_once "inc/header.php"; 
?>

<div class="container">
    <form action="../traitement/action.php" method="post">
        <div class="form-group link-light">
            <label >title :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="title" >
        </div>

        <div class="form-group link-light mt-3">
            <label >number_main_actors :</label>
            <input type="text" class="form-control mt-3 border-success-subtle border-3" name="number_main_actors" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label >number_total_actors :</label>
            <input type="number" class="form-control mt-3 border-success-subtle border-3" name="number_total_actors" >
        </div>

        <button class="btn btn-primary mt-5 mb-5 border-success-subtle bg-secondary border-2" name="add_movies" value="submit">Add Movie</button>
    </form>
</div>

<?php include_once "inc/footer.php"; ?>