<?php
$PostImg = $_FILES["PostImg"];
$PostName = $_POST["PostName"];
$PostText = $_POST["PostText"];
$Category = $_POST["Category"];

$types=['image/img','image/png','image/jpeg'];

if (strlen($PostName)>=20) {
   echo 'дурной?, короче сделай';
}; 

foreach($types as $value) { 
    if ($PostImg['type'] == $value){ 
        echo 'ok <br>';
        break; 
    }
};

if(is_string($PostName) && is_string($PostText)) {
    echo 'ok';
};
?>