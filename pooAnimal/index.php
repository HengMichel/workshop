<!-- créer un formulaire avec les champs dans index.php: -->
<!-- nom, prénom, émail, mot de passe -->
<!-- la validation du formulaire redirige vers action.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
    <title>Formulaire</title>
</head>
<body class="bg-success">
    
    <div class="container">
        <form action="model/action.php" method="post">

            <div class="form-group link-warning">
            <label for="lastname">lastname :</label>
            <input type="text" class="form-control border-danger border-3 mt-3" id="lastname" name="lastname" >
        </div>
        
        <div class="form-group link-warning mt-3">
            <label for="firstname link-light">Firstname :</label>
            <input type="text" class="form-control border-danger border-3 mt-3" id="firstname" name="firstname" >
        </div>
 
        <div class="form-group link-warning mt-3">
            <label for="email link-warning">Email :</label>
            <input type="email" class="form-control border-danger border-3 mt-3" id="email" name="email" >
        </div>
 
        <div class="form-group link-warning mt-3">
            <label for="password link-warning">Password :</label>
            <input type="password" class="form-control border-danger border-3 mt-3" id="password" name="password" >
        </div>
        
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5 border-danger border-3 mt-2 bg-warning link-danger" name="co" value="co">Co</button>
    </form>
</div>
</body>
</html>