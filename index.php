<?php require_once __DIR__."/includes/config.php"?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
    <link href="//fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Main</title>
</head>
<body>


<?php require "modules/header.php"; ?>
<main>

    <span class="logo"><img src=<?= '"img/logo_iuthub.png'.webp().'"' ?>  alt=""></span>
    <div class="search-bar">
        <input type="text" id="search_bar" name="search_bar">
        <img src="img/menu-icon.svg" alt="Logo menu burger">
    </div>


    <div class="recommendation">
        <img src="" alt=""> <!-- Film recommendation 1 -->
        <a href="a"></a> <!-- Button visionage film-->
        <img src="" alt=""> <!-- Film recommendation 2 -->
        <a href=""></a> <!-- Button visionage film-->
        <img src="" alt=""> <!-- Film recommendation 3 -->
        <a href=""></a> <!-- Button visionage film-->
        <img src="" alt=""> <!-- Film recommendation 4 -->
        <a href=""></a> <!-- Button visionage film-->
    </div>

    <div class="account">
        <a href="">Connection</a>
        <a href="">Inscription</a>
        <a href="">Student</a>
        <a href="">Normal</a>
        <a href="">Family</a>
    </div>
</main>
</body>
</html>

