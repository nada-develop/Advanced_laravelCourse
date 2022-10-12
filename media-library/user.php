<?php
if(isset($_POST['create'])){
$user_folder = $_POST['folder'];
mkdir($user_folder);
if($_POST['file-content']=="php"){
    $user_file = $_POST['filename'];
    $user_file_content = $_POST['filecontent'];
    file_put_contents($user_folder . DIRECTORY_SEPARATOR . $user_file .'.php',"<?php echo $user_file_content ?> " ); 
}elseif($_POST['file-content']=="text"){
    $user_file = $_POST['filename'];
    $user_file_content = $_POST['filecontent'];
    file_put_contents($user_folder . DIRECTORY_SEPARATOR . $user_file .'.text', $user_file_content ); 
}elseif($_POST['file-content']=="jason"){
    $user_file = $_POST['filename'];
    $user_file_content = $_POST['filecontent'];
    file_put_contents($user_folder . DIRECTORY_SEPARATOR . $user_file .'.jason', $user_file_content ); 
}
// $run_customer = mysqli_query($conn,$select_customer);
// $check_mail = mysqli_num_rows($run_customer);
// if($check_mail==1){
//   $select_pass = "SELECT customer_pass FROM customer WHERE customer_email = '$customer_email'";
//   $run_pass = mysqli_query($conn,$select_pass);
//   $password_rec = mysqli_fetch_assoc($run_pass);
//   $password = $password_rec['customer_pass'];
//   if(password_verify($customer_pass, $password)){
//     $_SESSION['customer_email'] = $customer_email;
//     echo "<script>alert('Your are logged in')</script>";
//     echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
//   }else{
//     echo "<script>alert('Your email or password is wrong')</script>";
//       exit();
//   }
// }else{
//   echo "<script>alert('Your email or password is wrong')</script>";
//     exit();
// }

 }
 ?>