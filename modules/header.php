<header>



    <input class="burger" type="checkbox">
    <img class="logo-burger" src="img/menu-icon.svg" alt="Logo menu burger">
    <span class="logo"><img src=<?= '"img/logo_iuthub.png'.webp().'"' ?>  alt=""></span>

    <ul>
        <li>li</li>
        <li>hey</li>
        <li>ghsyhsdgsdf</li>
    </ul>
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