<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game.css">
    <title>Vyberte velikost</title>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <?php
    session_start();
    include "navbar.php";
    include 'databaze.php';
    ?>
    <form method="post" action="generateGame.php">
        <label for="width">Šířka hrací plochy:</label>
        <input type="number" name="width" min="4" max="20" required>
        <label for="height">Výška hrací plochy:</label>
        <input type="number" name="height" min="4" max="20" required>
        <input id = "inputbutton" type="submit" value="Vygenerovat hrací plochu">
      </form>
</body>
</html>