<?php 

//добавить форму для создания комментариев только для авторизованных пользователей
include "connect.php";

$new_id = isset($_GET["new"])? $_GET["new"]:false;

if ($new_id){

$query_getNew = "SELECT news.*, categories.name FROM news inner join categories on news.category_id = categories.category_id WHERE news_id = $new_id";

$new_info = mysqli_fetch_assoc(mysqli_query($con, $query_getNew));

$date =  date("d.m.Y h-i-s", strtotime($new_info['publish_date']));

$month = [
    '01'=> "Января", 
    '02' => "Февраля", 
    '03'=> "Марта", 
    '04'=> "Апреля", 
    '05'=> "Мая", 
    '06'=> "Июня", 
    '07'=> "Июля", 
    '08'=> "Августа", 
    '09'=> "Сентября", 
    '10'=> "Октября", 
    '11'=> "Ноября", 
    '12'=> "Декабря"
];
 
$m_text = $month[substr($date,3,2)];

$publish_date = substr($date,0,2)." ". $m_text." ". substr($date,6);

$comments_result = mysqli_query($con, "SELECT `comment_text`, `comment_date`, `username` FROM `comments` INNER JOIN `users` ON users.user_id, comments.user_id WHERE news_id = $new_id"); 
$comments = mysqli_fetch_all($comments_result);
// $commentator = mysqli_query($con, "SELECT `username` FROM `users` WHERE user_id = $");
}
else {
    header("Location: /");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <?php
    
    $new_id = $new_info['news_id']; 
    echo "<div class='img'><img src='images/news/" . $new_info['image']. "'>";
    echo "<h1>". $new_info['title']. "</h1>";
    echo "<p>". $new_info['content']. "</p>";
    echo "<i>". $publish_date."</i>";
    echo "</div>";
     
    ?>
<h3 class="mb-3">Комментарии</h3>
<?php if ($userName){ ?>
    <form action="new" method="POST">
        <label for="cmment_text" class="form_label">Напишите комментарий</label>
        <input type="text" class="">
    </form>
<?php } ?>

<?php if (mysqli_num_rows($comments_result)) {
    foreach($comments as $comment) {?>
        <div class="card_text">
            <div class="card_header">
                
            </div>
            <div class="card_body">
                <?=$comment[2]?> <br>
                <?=$comment[3]?> <br>
                <?=$comment[0]?>
            </div>
        </div>
    <?php } 
} else 
    echo "<i>Комментариев пока нет</i>";
?> 
</div>
</body>
</html>