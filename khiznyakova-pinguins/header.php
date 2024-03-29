<?php 
include "connect.php"; // выражение include включает и выполняет указанный файл 
$query_get_category = "select * from categories"; 

$username = isset($_SESSION["user_id"]) ? mysqli_fetch_assoc(mysqli_query($con, 'SELECT username FROM users WHERE user_id =' . $_SESSION["user_id"]))["username"] : false;

session_start();
// $id_cat = isset($_GET['category_id'])?$_GET['category_id']:false;  
 
// $get_cat = mysqli_query($con, "select * from news where category_id = "); 
 
$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); //получаем результат запроса из переменной query_get_category 
// и преобразуем его в двумерный массив, где каждый элемент это массив с построчным получением кортежей из таблицы результата запроса 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>news</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
    <a href="reg.php">
        <div class="burger_menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"  fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M18 14H0V12H18V14ZM12 8H0V6H12V8ZM0 2V0H18V2H0Z" fill="#BCBFC2"/>
        </svg>
        <h4>Sections</h4> 
        </div>
    </a>
    <div class="search-input">
        <form action="" method="GET" id="serchform">       
            <input type="text" placeholder="Search" name="Search">
        </form>
    </div>
    <div class="sign-in">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M18 16.6316C16.3675 18.2105 13.7008 19 10 19C6.29917 19 3.63251 18.2105 2 16.6316C2 13.3481 3.90591 10.9832 6.70588 10C7.60059 10.4169 8.59455 11 10 11C11.4054 11 12.3311 10.3926 13.2941 10C16.0575 10.9965 18 13.3748 18 16.6316ZM10 9C7.79086 9 6 7.20914 6 5C6 2.79086 7.79086 1 10 1C12.2091 1 14 2.79086 14 5C14 7.20914 12.2091 9 10 9Z" fill="#BCBFC2"/>
    </svg>
        <p><a href="admin/index.php" class = 'admin'>Войти</a></p>
        <?=(!isset($_SESSION["user_id"]))?"Вход": "Выход"?>
    </div>
</header>

    <div class="name_head">
        <h1>Пингвинюльки</h1>
        <div class="date">
            <p>Monday, January 1, 2018  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10 16.4763C10.4151 16.4763 10.7494 16.8106 10.7494 17.2257V18.2506C10.7494 18.6657 10.4151 19 10 19C9.5849 19 9.25061 18.6657 9.25061 18.2506V17.2257C9.25061 16.8106 9.5849 16.4763 10 16.4763ZM10 3.52367C9.5849 3.52367 9.25061 3.18939 9.25061 2.77429V1.74939C9.25061 1.33429 9.5849 1 10 1C10.4151 1 10.7494 1.33429 10.7494 1.74939V2.77429C10.7494 3.18939 10.4151 3.52367 10 3.52367ZM18.2506 9.25061C18.6657 9.25061 19 9.5849 19 10C19 10.4151 18.6657 10.7494 18.2506 10.7494H17.2257C16.8106 10.7494 16.4763 10.4151 16.4763 10C16.4763 9.5849 16.8106 9.25061 17.2257 9.25061H18.2506ZM2.77429 9.25061C3.18939 9.25061 3.52367 9.5849 3.52367 10C3.52367 10.4151 3.18939 10.7494 2.77429 10.7494H1.74939C1.33429 10.7494 1 10.4151 1 10C1 9.5849 1.33429 9.25061 1.74939 9.25061H2.77429ZM15.6388 5.42286C15.3449 5.71306 14.871 5.71673 14.5771 5.42286C14.2833 5.12898 14.2833 4.6551 14.5771 4.36122L15.3008 3.63755C15.5947 3.34367 16.0686 3.34367 16.3624 3.63755C16.6563 3.93143 16.6563 4.40531 16.3624 4.69918L15.6388 5.42286ZM4.36122 14.5771C4.6551 14.2869 5.12898 14.2833 5.42286 14.5771C5.71673 14.871 5.71673 15.3449 5.42286 15.6388L4.69918 16.3624C4.40531 16.6563 3.93143 16.6563 3.63755 16.3624C3.34367 16.0686 3.34367 15.5947 3.63755 15.3008L4.36122 14.5771ZM15.6388 14.5771L16.3624 15.3008C16.6563 15.5947 16.6563 16.0686 16.3624 16.3624C16.0686 16.6563 15.5947 16.6563 15.3008 16.3624L14.5771 15.6388C14.2833 15.3449 14.2833 14.871 14.5771 14.5771C14.871 14.2833 15.3449 14.2833 15.6388 14.5771ZM4.36122 5.42286L3.63755 4.69918C3.34367 4.40531 3.34367 3.93143 3.63755 3.63755C3.93143 3.34367 4.40531 3.34367 4.69918 3.63755L5.42286 4.36122C5.71673 4.6551 5.71673 5.12898 5.42286 5.42286C5.12898 5.71673 4.6551 5.71673 4.36122 5.42286ZM10 4.36122C13.1078 4.36122 15.6388 6.89224 15.6388 10C15.6388 13.1114 13.1078 15.6388 10 15.6388C6.88857 15.6388 4.36122 13.1078 4.36122 10C4.36122 6.88857 6.89224 4.36122 10 4.36122ZM10 14.1363C12.2812 14.1363 14.1363 12.2812 14.1363 10C14.1363 7.71878 12.2812 5.86367 10 5.86367C7.71878 5.86367 5.86367 7.71878 5.86367 10C5.86367 12.2812 7.71878 14.1363 10 14.1363Z" fill="#BCBFC2"/>
</svg> -23</p>
    </div>
            <div class="weather">
                <img src="" alt="">
                <p></p>
            </div>
        </div>
    </div>
    <nav class = "navigation">
        <ul>
            <?php
                foreach ($categories as $category) {
                    echo "<li><a href='/?cat=$category[0]'>$category[1]</a></li>";  
                }
            ?>
        </ul>
    </nav>

    <script>
        $('#serchform').on ('keyup', function (search)){
            <?php 
                $searching = isset($_GET['Search'])? $_GET['Search']: false; 
                ?>
        }
    </script>

