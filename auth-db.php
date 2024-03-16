<?php
session_start();
include "connect.php";
$login = strip_tags(trim($_POST['login']));
$pass = strip_tags(trim($_POST['pass']));


$result = "SELECT *FROM `users` WHERE `username`='$login' and `password` = '$pass'"; 
$result1 = mysqli_query($con, $result); 

$user = mysqli_fetch_assoc($result1); // конвертация в массив

if(count($user) == 0){
	echo "Такой пользователь не найден.";
	exit();
}
else if(count($user) == 1){
	echo "Логин или пароль введены неверно";
	exit();
} else {
	$_SESSION['user'] = $user['username'];

	header('Location: page.php');
}


