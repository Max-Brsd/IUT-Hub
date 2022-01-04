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
		<title>Connexion</title>
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body class="login">
        <a href="index.php"><img src="img/logo_iuthub2.png" id="logo-acceuil"></a>
        <img src="img/part-2.png" id="part2">
        <img src="img/part-1.png" id="part1">

        <img src="img/icon-iphone.svg" id="iphone">
		<main>
			<form id="form-login" method="POST" enctype="multipart/form-data" action="modules/logme.php">
					<?php
						if(isset($_SESSION['error']) && $_SESSION['error']){
							unset($_SESSION['error']);
							echo "<a>Error in the login, password or mail incorrect</a>";
						}
					 ?>
                <div class="email-div">
					<input id="email" type="text" name="email" required>
                    <label for="email" id="label-email">Email : </label>
                </div>
                <div class="password-div">
					<input id="password" type="password" name="password" required>
                    <label for="password" id="label-password">Mot de passe : </label>
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