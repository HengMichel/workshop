<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>Formulaire animal</title>
</head>
<body class="bg-success">
    
    <div class="container">
        <form action="model/action.php" method="post">

            <div class="form-group link-warning">
            <label for="breed">breed :</label>
            <input type="text" class="form-control border-danger border-3 mt-3" id="breed" name="breed" >
        </div>
        
        <div class="form-group link-warning mt-3">
            <label for="name link-light">name :</label>
            <input type="text" class="form-control border-danger border-3 mt-3" id="name" name="name" >
        </div>
 
        <div class="form link-warning mt-3">
            <label for="type link-warning">type :</label>
            <input type="radio" value="carnivorous" class="form-check-input border-danger border-3 mt-3 " id="type" name="type">carnivorous
            <input type="radio" value="herbivorous" class="form-check-input border-danger border-3 mt-3" id="type" name="type">herbivorous
        </div>
        
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-danger border-3 mt-2 bg-warning link-danger" name="submit" value="submit">Submit</button>
    </form>
</div>
</body>
</html>