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


    <form class="search-bar" method="GET" action="index.php">
        <input type="text" id="query" name="query" required>
    </form>

    <?php
        if(isset($_GET['query']) && ! empty($_GET['query'])){
            try {
                $pdo = new PDO('sqlite:'.__DIR__.'/data/IUTHub.db');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $statement = $pdo->prepare("SELECT * FROM movies WHERE title LIKE '%:query%'");

                $statement->execute(['query' => $_GET['query']]);

                $movieList = $statement->fetchAll();

                foreach($movieList as $movie){
                    echo '<a class="thumbnail" href="watch?movie='.$movie['title'].'" >'.$movie['title'].'</a>';
                }
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    ?>

    <div class="recommendation">

        <section class="carousel" aria-label="Gallery">

            <ol class="carousel__viewport">
                <li id="carousel__slide1"
                    class="carousel__slide">
                    <div class="carousel__snapper">
                        <a href="#carousel__slide4"
                           class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2"
                           class="carousel__next">Go to next slide</a>
                    </div>
                </li>
                <li id="carousel__slide2"
                    class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide1"
                       class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide3"
                       class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide3"
                    class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide2"
                       class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide4"
                       class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide4"
                    class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide3"
                       class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide1"
                       class="carousel__next">Go to first slide</a>
                </li>
            </ol>

        </section>




    </div>


    <p class="bot"></p>
</main>

</body>

</html>