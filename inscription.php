<?php
require_once __DIR__."/includes/config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
    <link rel="icon" type="image/png" href="favicon.ico" />
    <title>Inscription</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="inscription">
<a href="index.php"><img src="img/logo_iuthub2.png" id="logo-acceuil"></a>
<img src="img/part-2.png" id="part2">
<img src="img/part-1.png" id="part1">

<img src="img/icon-iphone.svg" id="iphone">
<main>
    <form id="form-login" method="POST" enctype="multipart/form-data" action="modules/logme.php">
        <div class="prenom-div">
            <input id="prenom" type="text" name="prenom" required>
            <label for="prenom" id="label-prenom">Prénom : </label>
        </div>
        <div class="nom-div">
            <input id="nom" type="text" name="nom" required>
            <label for="nom" id="label-nom">Nom : </label>
        </div>

        <div class="email-div">
            <input id="email" type="email" name="email" required>
            <label for="email" id="label-email">Email : </label>
        </div>
        <div class="password-div">
            <input id="password" type="password" name="password" required>
            <label for="password" id="label-password">Mot de passe : </label>
        </div>
        <div class="Vpassword-div">
            <input id="Vpassword" type="password" name="Vpassword" required>
            <label for="Vpassword" id="label-Vpassword">Mot de passe : </label>
        </div>

        <div class="span-div">
            <span id="barre"></span>
        </div>
        <div class="button-div">
            <button type="submit" id="valide">Valider</button>
        </div>
    </form>
</main>
<script src="js/script.js"></script>
</body>
</html>