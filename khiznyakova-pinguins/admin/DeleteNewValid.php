<?php 
    include "../connect.php"; 
    
    $id_new = isset($_GET['new'])? $_GET['new']:false; // тернарный оператор синтаксис : условие?выражение1, если true: выражение2, если false 
    
    $query_delete = "DELETE FROM `news` WHERE `news_id` = '$id_new'"; 
    
    $result = mysqli_query($con, $query_delete); 
    if($result){ 
        echo "<script> 
        alert('Данные удалены'); 
        location.href = '/admin'; 
        </script>"; 
    } else{ 
        echo "<script> 
        alert('Ошибка".mysqli_error($con)."'); 
        location.href = '/admin'; 
        </script>"; 
    } 