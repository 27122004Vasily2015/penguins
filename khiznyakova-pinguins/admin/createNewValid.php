<?php
include "../connect.php";

$newImage = isset($_FILES["newImage"]["tmp_name"])?$_FILES['newImage']:false;
$newTitle = isset($_POST["newTitle"])?$_POST['newTitle']:false;
$newContent = isset($_POST["newContent"])?$_POST['newContent']:false;
$newCategory = isset( $_POST["newCategory"])?$_POST['newCategory']:false;

function check_error($error){
    return "<script>
    alert('$error');
    </script>";
}


if ($newTitle and $newContent and $newCategory){
    if (mb_strlen($newTitle) > 50) 
        echo check_error("название не должно превышать 50 символов");
    else {
        $file_name= $newImage["name"];
        $result = mysqli_query($con, "INSERT INTO `news`(`image`, `title`, `content`, `category_id`) VALUES('$file_name', '$newTitle', '$newContent', '$newCategory')");
    
    if($result){
        move_uploaded_file($newImage["tmp_name"], "images/news/$file_name");
        echo check_error("новость успешно создана");
    }
    else 
        echo check_error("произошла ошибка:" . mysqli_error($con));
}
}else{
    echo check_error("все поля должны быть заполнены");
};

// $types = ['image/jpeg', 'image/png'];




// if (mb_strlen($newTitle) > 20) {
//     echo "<p>слишком много букв в заголовке</p>";
// } elseif (!in_array($newImage['type'], $types)) {
//     echo 'загрузите файл в формате JPEG или PNG<br>';
// } elseif (!is_string($newTitle) || !is_string($newContent) || !is_string($newCategory)) {
//     echo 'некорректные данные';
// } else {

//     $targetFile =  basename($newImage["name"]);

//     $quary_info_news = "INSERT INTO news (image, title, content, category_id) VALUES ('$targetFile', '$newTitle', '$newContent', 1)";

//     if (mysqli_query($con, $quary_info_news)) {
//         echo "новая запись добавлена";
//     } else {
//         echo "ошибка " . $quary_info_news . "<br>" . mysqli_error($con);
//     }
// }

?>
