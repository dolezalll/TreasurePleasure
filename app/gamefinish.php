<?php
session_start();
include 'databaze.php';

    $movecount = $_POST['moves'];
    $width = $_SESSION["width"];
    $height = $_SESSION["height"]; 
    $userId = $_SESSION['userID'];
    $isUserLogged = $_SESSION['userLoged'];

    if(isset($isUserLogged)){
        
    if($isUserLogged == true){
        $sql = "INSERT INTO games(pocet_tahu, user_id, velikost_pole_width, velikost_pole_height) VALUES($movecount,$userId, $width, $height)";
        $result = $conn->query($sql);
    }}
    

?>