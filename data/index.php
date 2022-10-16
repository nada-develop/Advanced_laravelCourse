<?php
$extension = pathinfo('data.text');
 var_dump($extension);die;
$basepath = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] .':8080' . dirname($_SERVER['REQUEST_URI'],2);
$imgaesPath = $basepath . '/image/';
$datapath = $basepath . '/data/';
//print_r($imgaesPath);die;
//print_r($datapath);die;
$readDir = __DIR__ ;
//print_r(dirname($readDir));die;
$readDirfiles = scandir($readDir);
// echo  implode(',' , $readDirfiles);
array_splice($readDirfiles,0,2);//delete .,..
//echo  implode(',' , $readDirfiles);
array_splice($readDirfiles, array_search('index.php',$readDirfiles),1);//delete index.php
//print_r($readDirfiles);die;
function getImage(string $file) : string {
$extension = pathinfo($file,PATHINFO_EXTENSION);
if($extension === ""){
   return "folder.png";
}
switch($extension){
    case "text":
    return "text.png";
    case "pdf":
        return "pdf.png";
        case "php":
            return "php.png";
            case "default":
                return "default.png";
                case "docs":
                    return "word.png";
                    case "html":
                        return "html.png";
}

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center text-dark h1 my-5">
             <?=basename($readDir)?>
            </div>
            <?php foreach($readDirfiles as $file):?>
            <div class="col-2">
                <a href="<?= $datapath .  $file?>">
              <div class="card text-left">
                <img class="card-img-top" src="<?= $imgaesPath . getImage($file) ?>" alt="">
                <div class="card-body">
                  <p class="card-title text-dark"><?= $file ?></p>
                </div>
              </div>
              </a>
            </div>
      <?php endforeach  ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>