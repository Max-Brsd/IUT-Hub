<?php
require_once __DIR__.'/includes/config.php';
if(!isset($_GET)){
	header("Location: index.php");
	exit();
}
try {
	$pdo = new PDO('sqlite:'.__DIR__.'/data/IUTHub.db');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo $_GET['query'];
} catch(PDOException $e){
	echo $e->getMessage();
}