<?php
	include "header.php";
	include "connect.php";
	session_start();

	$user_id = $_SESSION['user'];

	$query_user = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM `users` WHERE `user_id` = $user_id"));
	// var_dump("SELECT * FROM `users` WHERE `user_id` = $user_id");
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Личный кабинет пользователя <?=$_SESSION["user"]?></h1> 
	<a href="exit.php">Что бы выйти нажмите по ссылке.</a> <br>
	
	<!-- <?=$query_user["name"]?>
	<?=$query_user["login"]?> -->
	
	<div class="account_main">
		<form action="edit_db.php" method="POST">
		<?php foreach ($query_user as $item):?>
			<label for="login">Логин</label>
			<input type="login" value="<?=$item[3]?>" id="login" name="login" required>
			<label for="pass">Пароль</label>
			<input type="pass" value="<?=$item[2]?>" id="pass" name="pass" required>
			<label for="login">Имя</label>
			<input type="text" value="<?=$item[1]?>" id="name" name="name" required>

		<?endforeach;?>
		</form>
	</div>
	
	<?php 
	// echo "<p>". $name['username']. "</p>";
	// echo "<p>". $name['password']. "</p>";
	// echo "<p>". $name['email']. "</p>";
	?>
	
</body>
</html>
