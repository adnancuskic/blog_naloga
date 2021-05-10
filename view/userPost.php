<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  
<?php 
  require_once "controller/UserController.php";
  foreach($posts as $post){
    echo $post["title"];
    echo "<br>";
    echo "<img style='width:100px' src='../". $post["coverPicPath"]."'/>";
    echo "ime: ".$post["ime"]."___priimek: ".$post["priimek"]." ".$post["date"];
    echo $post["imeKategorije"];
    echo "<br>";
    echo $post["content"];
    echo $post["likes"]."-".$post["dislikes"];
    echo "<br>";
  }
?>

</body>
</html>