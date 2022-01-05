<?php
require_once __DIR__.'/../includes/config.php';
function checkPost(){
	if(!empty($_POST['prenom']) && 
	!empty($_POST['nom']) && 
	!empty($_POST['email']) && 
	!empty($_POST['password']) && 
	!empty($_POST['Vpassord'])
	){
		return true;
	}
	else {
		return false;
	}
}

if (checkPost()) {
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		// not validated
		echo "BOUM";
	}
	try {
		$pdo = new PDO('sqlite:'.__DIR__.'/../database.db');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$check = $pdo->prepare("SELECT * FROM account where email=:email");
		$check->execute(
			[
				'email' => $_POST['email']
			]
		);
		$user = $check->fetch();
		var_dump($user);
		if($user){
			$_SESSION['alreadyExists'] = true;
			header('Location: /inscription.php');
			exit();
		}
		else {
			$data = [
				'email' => strip_tags($_POST['email']),
				'prenom' => strip_tags($_POST['prenom']),
				'nom' =>strip_tags($_POST['nom']),
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
			];
			$s = $pdo->prepare("INSERT INTO users (name, lastname) VALUES (:prenom, :nom)");
			$s->execute($data);
			$g = $pdo->prepare("SELECT idUser FROM users WHERE name=:prenom AND lastname=:nom");
			$g->execute($data);
			$myID = $g->fetch();
			$statement = $pdo->prepare("INSERT INTO account (email, password, idUser1) VALUES (:email, :password, :myID)");
			$data['myID'] = $myID;
			$statement->execute($data);
			$_SESSION['user'] = $data;
		} 
	} 
	catch(PDOException $e){
		echo 'Exception: '. $e->getMessage();
		die();
	}
}
else {
	$_SESSION['badForm'] = true;
	header('Location: /inscription.php');
	exit();
}
header('Location: /index.php');
exit();
/*
consectetuer@nislQuisquefringilla.com|XMB37JHA8WE
lectus.pede.ultrices@sem.edu|WNR75WHJ3NC
dapibus.rutrum.justo@aliquam.net|SDV07JPX8IF
ut.lacus@feugiatplacerat.net|OEW99MPV2AR
Duis@vitaediam.co.uk|QSL25CXR2BE */
