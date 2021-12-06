<header>


    <input class="burger" type="checkbox">
    <img class="logo-burger" src="img/menu-icon.svg" alt="Logo menu burger">

    <ul id="menu">
        <a href=""><li>Connection</li></a>
        <a href=""><li>Inscription</li></a>
        <a href=""><li>Student</li></a>
        <a href=""><li>Normal</li></a>
        <a href=""><li>Family</li></a>
    </ul>

    <span class="logo"><img src=<?= '"img/logo_iuthub.png'.webp().'"' ?>  alt=""></span>


	<nav>
		<a href="">Button 1</a>
		<a href="">Button 2</a>
		<a href="">Button 3</a>
		<a href="">Button 4</a>
	</nav>
	<?php 
		if(!empty($_SESSION["admin"])){
			echo "welcome ". $_SESSION["user"];
		}
	?>

</header>