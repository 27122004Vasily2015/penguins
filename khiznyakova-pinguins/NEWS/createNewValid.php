<?php
// $PostImg = $_FILES["PostImg"];
// $PostName = $_POST["PostName"];
// $PostText = $_POST["PostText"];
// $Category = $_POST["Category"];

// $types=['image/img','image/png','image/jpeg'];

// if (strlen($PostName)>=20) {
//    echo 'дурной?, короче сделай';
// }; 

// foreach($types as $value) { 
//     if ($PostImg['type'] == $value){ 
//         echo 'ok <br>';
//         break; 
//     }
// };

// if(is_string($PostName) && is_string($PostText)) {
//     echo 'ok';
// }; 
include 'connect.php';

$PostImg = $_FILES["PostImg"]["name"];
// var_dump($PostImg); 
$PostName = $_POST["PostName"];
$PostText = $_POST["PostText"];
$Category = $_POST["Category"];

$query_title_news = " INSERT INTO `news` (`image`, `title`, `content`, `category_id`) VALUES ('$PostImg', '$PostName', '$PostText', 1 )";

// $news = mysqli_query($con, $query_title_news);
if(mysqli_query($con, $query_title_news)){
    echo "новая запись добавлена";
}; 
