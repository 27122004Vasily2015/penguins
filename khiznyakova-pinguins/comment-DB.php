<?php
session_start();
include "connect.php";
$comment = isset($_POST["comments_text"])?$_POST["comments_text"]: false;
$id_new = isset($_POST["id_new"])? $_POST["id_new"]: false;
$user_id = isset($_SESSION["user_id"]);

if ($user_id){
if($comment && $id_new){

    $query = "INSERT INTO `comments` (`news_id`, `user_id`, `comment_text`) VALUES ($id_new, $user_id, '$comment')";
    if(mysqli_query($con, $query)) header('Locatioin: /oneNew.php?new=$id_new');
    else echo "Ошибка добавления новости!";
}
} else {
    echo "<script>alert(\"Нужно авторизоваться\");
    </script>";
}; 