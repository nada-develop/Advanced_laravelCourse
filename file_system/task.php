<?php
$customer_path = 'customers'. DIRECTORY_SEPARATOR . 'users'.DIRECTORY_SEPARATOR;
mkdir('customers');
mkdir('customers'. DIRECTORY_SEPARATOR . 'users'.DIRECTORY_SEPARATOR);
if(file_exists($customer_path)){
    file_put_contents('customers'. DIRECTORY_SEPARATOR . 'users'.DIRECTORY_SEPARATOR.'ahmed.text','salary:5000');
}else{
    // mkdir('customers');
   
}
$directory1 = "images";
$directory2 = "images".DIRECTORY_SEPARATOR."users";
$directory3 = "images".DIRECTORY_SEPARATOR."customers";
$file1 = "users.php";
$file2 = "customers.txt";
mkdir($directory1);
mkdir($directory2);
mkdir($directory3);
$filepath1 = "images". DIRECTORY_SEPARATOR."users".DIRECTORY_SEPARATOR . $file1;
$filepath2 = "images". DIRECTORY_SEPARATOR."customers".DIRECTORY_SEPARATOR . $file2;
file_put_contents($filepath1,"<?php echo'hello-world' ?> " );
file_put_contents($filepath2,"salary:2000  " );
chmod($filepath1,0600);
if(is_writable($filepath)){
    file_put_contents($filepath1,"<?php echo'hello-guys' ?> " );
}