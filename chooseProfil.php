<?php
<<<<<<< Updated upstream
    session_start();
?>
=======
session_start();
?>

>>>>>>> Stashed changes
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

    <link rel = "icon" href ="/img/logo_iuthub.png" type = "image/x-icon">
</head>
<body class="chooseProfile">
    <img id="imgBackgroundP2" src="img/part-2.svg">
    <img id="imgBackgroundP1" src="img/part-1.svg">

    <a href="index.php" id="retourHome">
        <img id="logoIUT" src="img/logo_iuthub2.png">
    </a>

    <h2 id="titleWho">Qui est-ce ?</h2>
        <input type="checkbox" id="modifyButton" name="checkBox">
    <p id="modifyText">Modifier</p>
    <p id="finishButton">Terminer</p>


    <div class="container">
        <div class="LoïcPicture">
            <a href="#"><?php $_SESSION['name']='Loïc'; ?><img  id="loïcPP" src="img/loïc.svg"></a>
            <p id="loïcPP-label">Loïc</p>
        </div>

        <div class="KurtPicture">
            <a href="#"><?php $_SESSION['name']='Kurt'; ?><img  id="kurtPP" src="img/kurt.svg"></a>
            <p id="kurtPP-label">Kurt</p>
        </div>

        <div class="MateoPicture">
            <a href="#"><?php $_SESSION['name']='Mateo'; ?><img  id="mateoPP" src="img/mateo.svg"></a>
            <p id="mateoPP-label">Mateo</p>
        </div>

        <div class="KevinPicture">
            <a href="#"><?php $_SESSION['name']='Kevin'; ?><img  id="kevinPP" src="img/kevin.svg"></a>
            <p id="kevinPP-label">Kevin</p>
        </div>

        <div class="MaximePicture">
            <a href="#"><?php $_SESSION['name']='Maxime'; ?><img  id="maximePP" src="img/maxime.svg"></a>
            <p id="maximePP-label">Maxime</p>
        </div>
    </div>

    <div class="modify-overlay">
        <div class="modify-Loïc">
            <a href="#"><img id="modifyL" src="img/modify.svg"></a>
        </div>
        <div class="modify-Kurt">
            <a href="#"><img id="modifyKu" src="img/modify.svg"></a>
        </div>
        <div class="modify-Mateo">
            <a href="#"><img id="modifyMat" src="img/modify.svg"></a>
        </div>
        <div class="modify-Kevin">
            <a href="#"><img id="modifyKe" src="img/modify.svg"></a>
        </div>
        <div class="modify-Maxime">
            <a href="#"><img id="modifyMax" src="img/modify.svg"></a>
        </div>
    </div>


</body>