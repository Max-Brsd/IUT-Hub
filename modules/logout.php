<?php
session_start();
$_SESSION = [];
session_destroy();
setcookie('user', '', time() - 86400, '/');
header('Location: /index.php');