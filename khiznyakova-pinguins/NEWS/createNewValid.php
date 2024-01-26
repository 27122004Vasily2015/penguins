<?php
include 'connect.php';
$PostImg = $_FILES["PostImg"];
$PostName = $_POST["PostName"];
$PostText = $_POST["PostText"];
$Category = $_POST["Category"];


$types=['image/img','image/png','image/jpeg'];

// if (strlen($PostName)>=20) {
//    echo 'дурной?, короче сделай';
// } else {
//     $query_title_news = " INSERT INTO `news` (`title`, `category_id`) VALUES ('$PostName', 1 )";
// }

// foreach($types as $value) { 
//     if ($PostImg['type'] == $value){ 
//             $query_title_news = " INSERT INTO `news` (`image`, `category_id`) VALUES ('$PostImg', 1 )";
//         break; 
//     }
// };

// if(is_string($PostName) && is_string($PostText)) {
//     $query_title_news = " INSERT INTO `news` (`title`, `content`, `category_id`) VALUES ('$PostName', '$PostText', 1 )";
// }; 

if (mb_strlen($PostName) > 20) {
    echo "<p>слишком много букв</p>";
} elseif (!in_array($PostImg['type'], $types)) {
    echo 'загрузите файл в формате JPEG или PNG<br>';
} elseif (is_string($PostName) && is_string($PostText) && is_string($Category)) {
    echo 'ок, это строка<br>';

    $quary_info_news = "INSERT INTO `news` (`image`, `title`, `content`, `category_id`) VALUES ('$PostImg ', '$PostName', '$PostText', 1)";

    if (mysqli_query($con, $quary_info_news)) {
        echo "новая запись добавлена";
    } else {
        echo "ошибка " . $quary_info_news . "<br>" . mysqli_error($con);
    }
} else {
    echo 'некорректные данные';
}


// $PostImg = $_FILES["PostImg"]["name"];
// // var_dump($PostImg); 
// $PostName = $_POST["PostName"];
// $PostText = $_POST["PostText"];
// $Category = $_POST["Category"];

// $query_title_news = " INSERT INTO `news` (`image`, `title`, `content`, `category_id`) VALUES ('$PostImg', '$PostName', '$PostText', 1 )";

$news = mysqli_query($con, $query_title_news);
if(mysqli_query($con, $query_title_news)){
    echo "новая запись добавлена";
};

