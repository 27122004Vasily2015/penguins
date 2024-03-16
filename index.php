<?php
include "connect.php"; //выражение include включает и выполняет указанный файл

$query_get_category = "select * from categories";

$categories = mysqli_fetch_all(mysqli_query($con, $query_get_category));

include "header.php";

$id_cat = isset($_GET['cat'])? $_GET['cat']:false;

$sort = isset($_GET['sort'])?$_GET['sort']:false;

// $filter = isset($_GET['filter'])?$_GET['filter']:false;

$params = "";

$query = "SELECT * FROM `news`";

$searching = "";

$paginate_count = 3;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = $page * $paginate_count - $paginate_count; //offset m 




$count_news = mysqli_num_rows(mysqli_query($con, $query));

if($id_cat){
    $query = "SELECT * FROM `news` ORDER BY `category_id` = $id_cat";
    $params .= "cat=$id_cat";
}
if($sort){
    // $params .= "sort=$sort";
    $query = "SELECT * FROM `news` ORDER BY `publish_date`  $sort";
}
if($sort && $id_cat){
    $query = "SELECT * FROM `news` WHERE category_id = $id_cat ORDER BY publish_date $sort";
}

if($searching){
    $query = "SELECT * FROM `news` WHERE `title` LIKE '%$searching%' OR `content` LIKE '%$searching%'"; 
}

$news =  mysqli_query($con, $query . " LIMIT $paginate_count OFFSET $offset");
?>
  <div class="num">
    <nav aria-label="Page navigation example"> 
  <ul class="pagination"> 
    <li class="page-item"> 
      <a class="page-link" href="#" aria-label="Previous"> 
        <span aria-hidden="true">&laquo;</span> 
      </a> 
    </li> 
     
    <?php  
    for($i=1; $i <= ceil($count_news/$paginate_count); $i++){?> 
        <li class="page-item"><a class="page-link" href="?page=<?=$i?><?=$id_cat?'&category_id'.$id_cat:''?><?=$sort?'&sort='.$sort:''?>"> 
            <?=$i?> 
        </a></li> 
     <?php }?> 
 
    <li class="page-item"> 
      <a class="page-link" href="#" aria-label="Next"> 
        <span aria-hidden="true">&raquo;</span> 
      </a> 
    </li> 
  </ul> 
</nav> 
</div>
    <main>
    
        
        <section class = "last-news">
            <section class="sort">
            <input type="hidden" name="page" value="<?=$page?>"> 
                <ul class="list-group list-group-horizontal mt-5 mb-3">
                    Сортировка по дате
                    <li class="list-group-item">
                        <a href="/?sort=ASC <?=($params!='')?'&'/$params:''?>"><img src="/images/news/asc-sort.png" alt=""></a>
                    </li>
                    <li class="list-group-item">
                        <a href="/?sort=DESC <?=($params!='')?'&'/$params:''?>"><img src="/images/news/desc-sort.png" alt=""></a>
                    </li>
                </ul>
            </section>

            <div class = "container">
                <div class="cards">
                    <?php
                        
                            if(mysqli_num_rows($news)==0){
                                echo "нет новостей";
                            }else {
                                while($new = mysqli_fetch_assoc($news)){
                                echo "<div class='card'>";
                                $new_id = $new['news_id'];
                                $new_date = $new['publish_date'];
                                echo "<img src='images/news/" . $new['image']. "'>";
                                echo "<a href = 'oneNew.php?new=$new_id'>". $new['title']."</a>";
                                echo "<p>".$new['content']."</p>";
                                echo "<p>".$new['publish_date']."</p>";
                                echo  "</div>";
                                }
                            }
                        
                
                    ?>
                </div>
            </div>
        </section> 
    </main>
  
</body> 
</html>