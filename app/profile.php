<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

<?php
session_start();
include "navbar.php";
include 'databaze.php';
$isUserLogged = $_SESSION['userLoged'];
$userId = $_SESSION['userID'];
if($isUserLogged == true){


    echo"<table style='width:50%'>
    <tr>
   
      <th>Šířka pole</th>
      <th>Výška pole</th>
      <th>Počet nalezených pokladů</th>
      <th>Nejlepší počet tahů</th>
      <th>Průměrná počet tahů</th>
      <th>Nejhorší počet tahů</th>
   </tr>";
    $sql = "SELECT velikost_pole_width, velikost_pole_height, COUNT(*) AS pocet_nalezenych_pokladu, MAX(pocet_tahu) AS best_number_of_pocet_tahu, AVG(pocet_tahu) AS average_number_of_pocet_tahu, MIN(pocet_tahu) AS worst_number_of_pocet_tahu FROM games INNER JOIN users ON users.id = games.user_id WHERE users.id = $userId GROUP BY velikost_pole_width, velikost_pole_height ORDER BY velikost_pole_width, velikost_pole_height;
";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   
  while($row = $result->fetch_assoc()) {
 


    
    $velikostPoleX = $row["velikost_pole_width"];
    $VeliksotPoleY = $row["velikost_pole_height"];
    $pocetPokladu = $row["pocet_nalezenych_pokladu"];
    $bestPocetTahu =$row["best_number_of_pocet_tahu"];
    $avaragePocetTahu =$row["average_number_of_pocet_tahu"];
    $worstPocetTahu =$row["worst_number_of_pocet_tahu"];

        echo "<tr>

        <td '>$velikostPoleX</td>
        <td> $VeliksotPoleY </td>
        <td> $pocetPokladu </td>
        <td> $bestPocetTahu </td>
        <td> $avaragePocetTahu </td>
        <td> $worstPocetTahu </td>
      </tr>";


  }

}

}else{
    echo " <h1>  Nejsi přihlášený </h1>";
}



?>

</table>
</body>
</html>