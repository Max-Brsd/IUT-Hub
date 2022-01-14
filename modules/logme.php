<?php
session_start();

if (!empty($_POST['email']) && !empty($_POST['password'])) {

	try {
		$pdo = new PDO('sqlite:'.__DIR__.'/../data/IUTHub.db');
		$statement = $pdo->prepare("SELECT * FROM account WHERE email =:email");
		$statement->execute(
			[
				'email' => $_POST['email']
			]
		);

		$user = $statement->fetch();
		if(!empty($user) && $user["password"] === $_POST["password"]){
			//$_SESSION['user'] = $user['name'];
			$_SESSION['password'] = $user['password'];
			$_SESSION['email'] = $user['email'];
            $_SESSION['idUser1'] = $user['idUser1'];
            $_SESSION['idUser2'] = $user['idUser2'];
            $_SESSION['idUser3'] = $user['idUser3'];
            $_SESSION['idUser4'] = $user['idUser4'];
            $_SESSION['idUser5'] = $user['idUser5'];

			$userInfo = array($_SESSION['user'], $_SESSION['password']);
			setcookie('user', json_encode($userInfo), time() + 86400, '/');
		}
		else {
			$_SESSION['error'] = true;
			header('Location: /login.php');
			exit();
		}
	} catch(PDOException $e){
		echo 'Exception: '. $e->getMessage();
		die();
	}
}
header('Location: /../chooseProfil.php');
exit();

/*
consectetuer@nislQuisquefringilla.com|XMB37JHA8WE
lectus.pede.ultrices@sem.edu|WNR75WHJ3NC
dapibus.rutrum.justo@aliquam.net|SDV07JPX8IF
ut.lacus@feugiatplacerat.net|OEW99MPV2AR
Duis@vitaediam.co.uk|QSL25CXR2BE */
