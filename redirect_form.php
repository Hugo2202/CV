<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500, initial-scale=1">
    <title>Home</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="app_css.css">
    <link rel="stylesheet" href="button_contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
?>

<div class="redirect_div">
    <h1>Votre message a bien été envoyé !</h1>
    <img src="img/ok.png" width="100px">
</div>

<div class="redirect_div">
    <h2>Récapitulatif de votre message :</h2>
    <div><strong>Nom : </strong><?php echo $nom?></div>
    <div><strong>Email : </strong><?php echo $email?></div>
    <div><strong>Message : </strong><?php echo $message?></div>

</div>
<div class="row">
    <a href="home.php" type="button" class="btn_submit_form">Retour à la page d'accueil</a>
</div>


</body>
</html>
