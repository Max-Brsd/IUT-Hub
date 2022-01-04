<header>

	<div class="navbar">
	<input class="burger" type="checkbox">
	<img class="logo-burger" src="img/menu-icon.svg" alt="Logo menu burger">

	<ul id="menu">
		<a href="<?= __DIR__ . '/../login.php' ?>"><li>Connection</li></a>
		<a href="<?= __DIR__ . '/../register.php' ?>"><li>Inscription</li></a>
		<a href="<?= __DIR__ .'/../chooseProfil.php' ?>"><li>Inscription</li></a>
	</ul>
	</div>

	<span class="logo"><img src="img/logo_iuthub2.png"  alt=""></span>



	<?php 
		if(!empty($_SESSION["admin"])){
			echo "welcome ". $_SESSION["name"];
		}
	?>

</header>