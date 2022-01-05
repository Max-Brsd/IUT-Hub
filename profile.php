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
            <div class="cardcolumn" ><div class="card">
                    <img class="cardimg" src="img/mateo.svg" alt="Profile picture">
                    <div class="cardtext">
                        <div class="card colored">
                            Sacré
                        </div>
                        <div class="card colored">
                            Matéo
                        </div>
                        <div class="card colored">
                            sacre.mateoo@gmail.com
                        </div>
                        <button class="reset colored" >Réinitialiser le mot de passe</button>
                    </div>
                </div>
            </div>

            <div class="cardcolumn">
                <div class="card">
                    <img class="cardimg" src="img/62780.png" alt="Profile picture">
                    <div class="cardtext">
                        <div class="card colored">
                            5161 6515 4894 4829
                        </div>
                        <div class="card colored">
                            Matéo Sacré
                        </div>
                        <div class="card colored">
                            91 chemin du paradis
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>

</html>