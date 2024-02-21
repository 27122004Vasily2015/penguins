<?php 
include "connect.php";

$new_id = isset($_GET["new"])? $_GET["new"]:false;

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $new_id = $new['news_id']; 
    echo "<div class='img'><img src='images/news/" . $new_info['image']. "'>";
    echo "<h1>". $new_info['title']. "</h1>";
    echo "<p>". $new_info['content']. "</p>";
    echo "<i>". $publish_date."</i>";
    echo "</div>";
     
    ?>
</body>
</html>