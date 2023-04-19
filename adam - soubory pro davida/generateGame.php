<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $width = $_POST["width"];
  $height = $_POST["height"];
  if ($width >= 4 && $width <= 20 && $height >= 4 && $height <= 20) {
    session_start();
    $_SESSION["width"] = $width;
    $_SESSION["height"] = $height;
    header("Location: game.php");
    exit();
  } else {
    echo "Šířka a výška hrací plochy musí být v rozmezí 4 až 20.";
  }
}
?>