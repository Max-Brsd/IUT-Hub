<?php require_once __DIR__ . "/includes/config.php" ?>
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
    <title>IUT-Hub</title>

    <link rel="icon" href="/img/logo_iuthub.png" type="image/x-icon">
</head>

<body>


<?php require "modules/header.php"; ?>
<main>




    <form class="search-bar" method="GET" action="query.php">
        <input type="text" id="query" name="query" required>
    </form>

    <div class="recommendation">

        <span><img src="" alt=""></span>
        <span><img src="" alt=""></span>
        <span><img src="" alt=""></span>

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


    <p></p>
</main>

</body>

</html>