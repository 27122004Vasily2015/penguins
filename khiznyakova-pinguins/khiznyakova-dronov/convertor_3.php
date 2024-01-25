<!doctype html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Конвертор</title>
 </head>
    <body>
        <section id="gallery">
        <?php
        require_once 'modules\data.php';
        $cnt = count($arr_images);
        for ($i = 0; $i < $cnt; $i++) {
        ?>
        <img src="/images/<?php echo $arr_images[$i] ?>">
        <?php } ?>
        </section> 
    </body>
</html> 

