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
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php include 'modules/header.php'; ?>
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
                    <label for="email" id="label-email">Email: </label>
                </div>
                <div class="password-div">
					<input id="password" type="password" name="password" required>
                    <label for="password" id="label-password">Mot de passe: </label>
                </div>
                <div class="button-div">
					<button type="submit">Valider</button>
                </div>
			</form>
		</main>
		<script src="js/script.js"></script>
	</body>
</html>