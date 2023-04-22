<?php session_start(); 
$width = $_SESSION["width"];
$height = $_SESSION["height"];
$poklad = rand(0, $width * $height);
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  
<style>
    .parent {
      display: grid;
      grid-gap: 10px;
      grid-template-columns: repeat(<?php echo $width; ?> , 150px);
      grid-template-rows: repeat(<?php echo $height; ?>, 150px);
    }
    .parent > div {
      padding: 10px;
      background-color: #EFCB68;
      border-radius: 5px;
      display: grid;
      place-items: center;
    }

    .parent > div {
      font-family: sans-serif;
      font-size: 24px;
      font-weight: bold;
    }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    echo "<div class='parent'>";
    for ($i=0; $i <  $_SESSION["width"]*$_SESSION["height"] ; $i++) { 
     if($poklad == $i ){
      echo" <div style='background-color:blue' id= '$i'>1</div>";
     }
     else
     {
      echo" <div id= '$i'>1</div>";
     }
        
  }
    echo"</div>" 
?>
   <img src="https://slideplayer.com/8625715/26/images/slide_1.jpg" alt="">
</body>
</html>