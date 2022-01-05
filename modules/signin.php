<?php
session_start();

if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['Vpassword'])){
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		// not validated
		echo "BOUM";
	}
	try {
		$pdo = new PDO('sqlite:'.__DIR__.'/../data/IUTHub.db');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$check = $pdo->prepare("SELECT * FROM account where email=:email");
		$check->execute(
			[
				'email' => $_POST['email']
			]
		);
		//var_dump($check);
		$user = $check->fetch();
		//var_dump($user);
		if($user){
			echo "if user";
			$_SESSION['alreadyExists'] = true;
			//header('Location: /inscription.php');
			//exit();
		}
		else {
            $s = $pdo->prepare("INSERT INTO users (name, lastname) VALUES (:prenom, :nom)");
            $s->execute([
                'prenom' => $_POST['prenom'],
                'nom' => $_POST['nom']
            ]);
            $g = $pdo->prepare("SELECT idUser FROM users WHERE name=:prenom AND lastname=:nom");
            $g->execute([
                'prenom' => $_POST['prenom'],
                'nom' => $_POST['nom']
            ]);
            $myID = $g->fetch();
            $statement = $pdo->prepare("INSERT INTO account (email, password, idUser1) VALUES (:email, :password, :myID)");
            $statement->execute([
                'email' => strip_tags($_POST['email']),
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'myID' => $myID
            ]);
            $_SESSION['user'] = [
                'email' => strip_tags($_POST['email']),
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'myID' => $myID
            ];
        }
	} 
	catch(PDOException $e){
		echo 'Exception: '. $e->getMessage();
		die();
	}
}
else {
	echo "else ";
	$_SESSION['badForm'] = true;
	//header('Location: /inscription.php');
	//exit();
}

//var_dump($_POST);