<?php
session_start();
include 'databaze.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $myVariable = $_POST['myVariable'];
 echo "The value of myVariable is: " . $myVariable;
}
$sql = "INSERT INTO games(pocet_tahu, user_id, velikost_pole_width, velikost_pole_height) VALUES($myVariable, 1, $width, $height)";
$result = $conn->query($sql);
?>