<?php
$imagefils = scandir('images');
// print_r($imagefils);
array_splice($imagefils,0,2);
foreach($imagefils as $file){
// if($file == "." || $file == ".."){
//     continue;
   
// }

echo $file . "<br>";

}
?>