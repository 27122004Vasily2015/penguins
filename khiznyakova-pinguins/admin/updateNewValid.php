<?php 
include "../connect.php";

$id = isset($_POST['id']) ? $_POST ['id'] : false; 
$newImage = ($_FILES["newImage"]["size"] !=0)?$_FILES['newImage']:false;
$newTitle = isset($_POST["newTitle"])?$_POST['newTitle']:false;
$newContent = isset($_POST["newContent"])?$_POST['newContent']:false;
$newCategory = isset( $_POST["newCategory"])?$_POST['newCategory']:false;
$category_id = isset($_POST['$Category']) ? $_POST['category'] : false;
function check_error($error,$id){
    return "<script>
    alert('$error'); 
    location.href = '/admin?new=$id';
    </script>";
}

$new_info = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM news WHERE news_id= $id"));

$query_update = "UPDATE news SET ";

    if ($new_info["title"] != $newTitle) 
    {$query_update .= "title = '$newTitle', "; 
         $check_update = true;}
    if ($new_info["content"] != $newContent)
         {$query_update .= "content = '$newContent', ";
         $check_update = true; }
    if ($new_info["category_id"] != $newCategory)
         {$query_update .= "category_id = '$newCategory', "; 
         $check_update = true;}
    if ($newImage) {$query_getNew .= "image =" . $newImage["name"] ."', ";
        move_uploaded_file($newImage["tmp_name"],"images/news/".$newImage["name"]); 
         $check_update = true;
    }
    if($check_update) {
        $query_update = substr($query_update,0,-2);
        $query_update .= " WHERE news_id = $id";
        var_dump($query_update);
        $result = mysqli_query($con, $query_update);
        if($result) echo check_error("Данные обновлены", $id);
        else echo check_error("Ошибка обновления!" . mysqli_error($con),$id);
    }

    else {
        echo check_error("Данные актуальны!",$id);
    }

    var_dump($query_update);

    