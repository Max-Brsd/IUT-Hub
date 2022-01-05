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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>


<?php require "modules/header.php"; ?>
<main>


    <form class="search-bar" method="GET" action="query.php">
        <input type="text" id="query" name="query" required>
    </form>

    <div class="recommendation">

        <span id="recom1">
            <i class='fas fa-chevron-circle-left' id="ileft" style='font-size:24px'></i>
            <img src="img/recom1.jpg" alt="">
            <i class='fas fa-chevron-circle-right' id="iright" style='font-size:24px'></i>
        </span>
        <span id="recom2">
            <i class='fas fa-chevron-circle-left' id="ileft" style='font-size:24px'></i>
            <img src="img/recom2.jpg" alt="">
            <i class='fas fa-chevron-circle-right' id="iright" style='font-size:24px'></i>
        </span>
        <span id="recom3">
            <i class='fas fa-chevron-circle-left' id="ileft" style='font-size:24px'></i>
            <img src="img/recom3.jpg" alt="">
            <i class='fas fa-chevron-circle-right' id="iright" style='font-size:24px'></i>
        </span>

    </div>


    <p></p>
</main>

</body>

</html>