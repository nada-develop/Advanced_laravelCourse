<?php
$url = 'classes'. DIRECTORY_SEPARATOR . 'users'.DIRECTORY_SEPARATOR.'login.php';
echo $url;
if(file_exists($url)){
    echo "file|dir exists";
}else{
    echo "file|dir  not exists"; 
}
