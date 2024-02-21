<?php
include "../connect.php"; 

$query_title_news = "SELECT `title` from `news`";

$titles = mysqli_fetch_all(mysqli_query($con, $query_title_news)); 

$query_get_category = "SELECT * from `categories`";

$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category)); //получаем резульатт запроса из переменной guery_get_category и 
//преобращем его в  двуменый массив с построчным получением кортежей из таблицы рещудьтата запроса

$news = mysqli_query($con,"SELECT * from `news`");

include "../header.php";
$news = mysqli_fetch_all(mysqli_query($con, "SELECT `news_id`, `title` from `news`"));

$id_new = isset($_GET["new"])?$_GET["new"] : false;

if($id_new) $new_info = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM `news` WHERE `news_id` = '$id_new'"));

?>


<div class="container">
    <h1>Панель администратора</h1>
    <div class = "content">
        <section class="col_1">
            <ul>
                <?php
                    foreach($news as $new) {
                        echo "<li><a href = '?new=". $new[0]."'>". $new[1]."</a>
                        <a href='DeleteNewValid.php?new=" . $new[0]."'><img src='/images/news/'></a> 
                        </li>";
                    }
                ?>
            <a href="/admin/createNewValid.php"><img src="../images/news/plus.png" alt="Добавить новость" class="icon"></a>
            <?php 
                echo "<a href='DeleteNewValid.php?new=$id_new'>".'удалить'."</a>";
            ?>
            <button><a class="icon" href="/admin/DeleteNewValid.php"><img src="../images/news/trash.png" alt="Удалить новость" class="icon"></a></button>
            </ul>
        </section>

        <section class="col_2">
        <h2><?=$id_new?"Редактирование новости":"Создание новости";?></h2>

        <form action="<?=$id_new?"update":"create";?>NewValid.php" method="POST" enctype="multipart/form-data" class="newsForm">
        <?= $id_new?"<div class='post_img' style='background-image:url(/images/news/" . $new_info['image'] . ")'></div>" : "";?>

        <?= $id_new?"<input type='hidden' name='id' value='$id_new'>" : "";?>


            <label for="newImage">Загрузите изображение новости:</label>
            <input type="file" id="newImage" name="newImage" accept="image/*">

            <br>

            <label for="newTitle">Заголовок новости:</label>
            <input type="text" id="newTitle" name="newTitle" value = '<?=$id_new?$new_info["title"]:"";?>'>

            <br>

            <label for="newContent">Текст новости:</label>
            <input type="text" id="newContent" name="newContent" value = '<?=$id_new?$new_info["content"]:"";?>'>

            <br>
            <label for="newCategory">Категории:</label>
            <select name="newCategory" id="newCategory">
                <?php 
                    foreach ($categories as $category) {
                        $id_cat = $category[0];
                        $name = $category[1];
                        $is_sel = ($id_cat == $new_info['category_id']) ? "selected" : '';
                        echo "<option value='$id_cat'" . ($id_new ? $is_sel : '') . ">$name</option>";
                    } 
                ?>
            </select>

            <br>

            <input type="submit" value="Отправить" class="submit-btn">


 <section class='admin'>
        <main>
            <section class="last-news">
                <div class="container">
                    <?php
                //   while($new = mysqli_fetch_assoc($news)){
                //     echo "<div class='card'>";
                //     echo "<img src='images/news/" . $new['image']. "'>";
                //     echo "<h2 class='c_title'>".$new['title']."</h2>";
                //     echo "<p>".$new['content']."</p>";
                //     echo  "</div>";
                //   }
                ?>
                </div>
                
            </section>
        </main>

    <div class="news_section">
        <h1>Новости</h1>

        <div class="ul_news">
            <ul>
                <?php
                    foreach ($titles as $title){
                        echo "<li><a href='#'>$title[0]</a></li>";
                    }
                
                ?>
            </ul>
        </div>
    </div>

</section>
    