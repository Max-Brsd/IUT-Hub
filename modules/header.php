<header>

    <div class="navbar">
    <input class="burger" type="checkbox">
    <img class="logo-burger" src="img/menu-icon.svg" alt="Logo menu burger">

    <ul id="menu">
        <a href=""><li>Connection</li></a>
        <a href=""><li>Inscription</li></a>
        <a href=""><li>Student</li></a>
        <a href=""><li>Normal</li></a>
        <a href=""><li>Family</li></a>
    </ul>
    </div>

    <span class="logo"><img src=<?= '"img/logo_iuthub.png'.webp().'"' ?>  alt=""></span>



	<?php 
		if(!empty($_SESSION["admin"])){
			echo "welcome ". $_SESSION["user"];
		}
	?>

</header>