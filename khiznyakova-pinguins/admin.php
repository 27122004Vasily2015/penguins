<?php
    require "connect.php";

    $query_title_news = "select `title` from `news`";

    $titles = mysqli_fetch_all(mysqli_query($con, $query_title_news));
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>news</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="news">
    <h1>Новости</h1>
    
        <div class="container_news">
        <?php
            foreach ($titles as $title) {
                echo "<li><a href = '#'>$title[0]</a></li>";
            }
        ?>
        </div>
    </div>
</body>
</html>