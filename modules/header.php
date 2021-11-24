<header>
	<img src="" alt=""> <!-- Les 4 points -->
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