<?php
$deletedirectory = "games" . DIRECTORY_SEPARATOR;
$gamefiles = scandir('games');
// print_r($gameFiles);
foreach($gamefiles as $file){
if($file == "." || $file == ".."){
    continue ;
}
    echo $file . "<br>";
    unlink($deletedirectory.$file);//games/data.text or data.php,..
 


}

rmdir($deletedirectory);
// علشان امسح ملف لازم امسح الفايلات اللي جواه 
//لو عايزة اخلي في دالة خاصة بعملية المسح فقط

function deleteDirectory( string $deleteDirectory){
    if( !str_ends_with($deleteDirectory,'/') || str_ends_with($deleteDirectory,'\\')){
        $deleteDirectory .= DIRECTORY_SEPARATOR;  
    }
    $deletedirectory = "games" . DIRECTORY_SEPARATOR;
    $gamefiles = scandir('games');
    // print_r($gameFiles);
    foreach($gamefiles as $file){
    if($file == "." || $file == ".."){
        continue ;
    }
        echo $file . "<br>";
        unlink($deletedirectory.$file);//games/data.text or data.php,..
     
    
    
    }
}


deleteDirectory('games');


?>