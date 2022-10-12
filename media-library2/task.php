<?php
define('SUPPORTED_EXTENSION',['php','text','jason']);
define("PATH",'media');//$path = 'media';
if($_SERVER['REQUEST_METHOD'] == "POST"){
 
  if(isset($_POST['folder'])){
     mkdir( PATH . DIRECTORY_SEAPARATOR . $_POST['folder']);
     $message = "<div>Good</div>";
  }
  if(isset($_POST['filename'])){
       echo $_POST['filename'];
       print_r(pathinfo( $_POST['filename']));
       $file_extension = pathinfo( $_POST['filename'])['extension'];
       $file_name = pathinfo( $_POST['filename'])['basename'];
       if(!in_array($file_extension,SUPPORTED_EXTENSION)){
        $error = "<div>error</div>";
       }
    $content = $_POST['filecontent'];
    if($file_extension == 'php'){
      $content = "<?php {$content}  ?>";
    }elseif($file_extension == 'jason'){
      $content = "{ {$content}  }";
    }
}


       file_put_contents( PATH . DIRECTORY_SEAPARATOR . $file_name, $content);
       
  }
  


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="" action="user.php" method="POST"><!--form begin-->
<?= $message  ??  "" ?>
        <div class="form-group"><!--form-group begin-->
            <label >CreateFolder</label>
            <input type="text" name="folder" class="form-control" required>
        </div><!--form-group finish-->
       
        <div class="form-group"><!--form-group begin-->
        <?= $error ?? "" ?>
            <label >CreataFile</label>
            <input type="text" name="filename" class="form-control"  >
          </div><!--form-group finish-->
          <div class="form-group"><!--form-group begin-->
            <label >FileContent</label>
            <textarea name="filecontent" id="" cols="30" rows="10"></textarea>
          </div><!--form-group finish-->


          
        <div class="text-center"><!--text-center begin-->
          <button class="btn btn-primary" value="Create" name="create">
         <i class="fa fa-sign-in"></i> Create
          </button>
        </div><!--text-center finish-->
        
        </form><!--form finish-->

</body>
</html>