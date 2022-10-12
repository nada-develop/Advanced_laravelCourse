<?php
copy('laravel_advanced\backup.ph','laravel_advanced\nada\back.php');
rename('laravel_advanced\backup.ph','laravel_advanced\osama\back.php');
// المتغير الاول ده مكانه الاولاني والمتغير التاني ده مكانه التاني
//هاته من اول فولدر وحطه في تني فولدر
rename('osama','ahmed');
//renameبتعمل حاجنين تغيير اسم او كت

$files = scandir($dir);

foreach($files as $image){
   echo $image . '<br>';

}