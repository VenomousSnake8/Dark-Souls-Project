<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$pass = md5($password);

$mysql = new mysqli('localhost','root','','dark_souls');

$mysql->query("INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$pass')");

$mysql->close();

header('Location: /?successful_reg=1');
exit;

?>