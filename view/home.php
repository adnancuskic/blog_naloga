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
  foreach($users as $user){
    echo "<img style='width:30px' src='". $user["profile_pic"]."'/>";
    echo "ime: ".$user["ime"]."___priimek: ".$user["priimek"]."___Vloga: ".$user["roles"];
    echo "<br>";
    if ($user["roles"] == "uporabnik"){
      echo "<a href='index.php/user?id=".$user["id"]."'> gumb do linka na njihov blog !</a>";
    }
    echo "<br>";
    echo "<br>";
  }
?>

</body>
</html>