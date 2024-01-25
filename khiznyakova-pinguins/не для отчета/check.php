<?php
$userName = $_POST["userName"];
$userAge = $_POST["userAge"];
if($userAge <18) {header("Location: child.php");}
else {header("Location: adult.php");}
?>