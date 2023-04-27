<?php session_start(); 
$moveCount = 0;
$width = $_SESSION["width"];
$height = $_SESSION["height"];
$poklad = rand(0, ($width * $height) - 1);
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script


 src="https://code.jquery.com/jquery-3.6.3.min.js"
 integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
 crossorigin="anonymous">
</script>
<style>
  .Treasure {
  background-image: url("https://www.emp-shop.cz/dw/image/v2/BBQV_PRD/on/demandware.static/-/Sites-master-emp/default/dw51e8ab4f/images/4/8/2/4/482401a.jpg?sfrm=png");
  background-size: cover;
  /* other styles */
  width: 100px;
  height: 100px;
}
  .arrow{width: 100px; height: 100px;background-color: greenyellow;text-align: center;}
  .done{width: 100px; height: 100px;background-color: greenyellow;text-align: center;}
  
    .parent {
      display: grid;
      grid-gap: 10px;
      grid-template-columns: repeat(<?php echo $width; ?> , 150px);
      grid-template-rows: repeat(<?php echo $height; ?>, 150px);
    }
    .parent > button {
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
// Initialize move counter
// Set the size of the game board
// Create a two-dimensional array of buttons
include "navbar.php";
include 'databaze.php';
echo '<H1 id="movecounter">number of moves</H1>';
$buttons = array();
for ($y = 0; $y < $height; $y++) {
  $row = array();
  for ($x = 0; $x < $width; $x++) {
    $row[] = '';
  }
  $buttons[] = $row;
}

// Choose a random button to be the treasure
$treasure_x = rand(0, $width - 1);
$treasure_y = rand(0, $height - 1);

// Set the treasure button value to "X"
$buttons[$treasure_y][$treasure_x] = 'X';

// Loop through the buttons and show the arrows
for ($y = 0; $y < $height; $y++) {
  for ($x = 0; $x < $width; $x++) {
    // Calculate the direction to the treasure button
    $dx = $treasure_x - $x;
    $dy = $treasure_y - $y;

    // Check if the button is the treasure button
    if ($dx == 0 && $dy == 0) {
      $arrow = 'X';
    } else {
      // Calculate the direction of the arrow
      if (abs($dx) > abs($dy)) {
        if ($dx > 0) {
          $arrow = '&#8594;'; // Right
        } else {
          $arrow = '&#8592;'; // Left
        }
      } else if (abs($dx) < abs($dy)) {
        if ($dy > 0) {
          $arrow = '&#8595;'; // Down
        } else {
          $arrow = '&#8593;'; // Up
        }
      } else {
        if ($dx > 0 && $dy > 0) {
          $arrow = '&#8600;'; // Diagonal Down-Right
        } else if ($dx < 0 && $dy < 0) {
          $arrow = '&#8598;'; // Diagonal Up-Left
        } else if ($dx < 0 && $dy > 0) {
          $arrow = '&#8601;'; // Diagonal Down-Left
        } else {
          $arrow = '&#8599;'; // Diagonal Up-Right
        }
      }
    }

    // Show the arrow in the button value
    $buttons[$y][$x] = "<div id ='$arrow'  class = 'arrow'></div>";

  }

}

// Output the buttons as a HTML table
echo '<table border="1">';
for ($y = 0; $y < $height; $y++) {
  echo '<tr>';
  for ($x = 0; $x < $width; $x++) {
    // Show the button value
    echo "<td >" . $buttons[$y][$x] . '</td>';
  }
  echo '</tr>';
}
echo '</table>';
?>
<a href="gamemenu.php">
     <input type="submit"  value="Play again" id="my-button" style="display: none;"/>
     </a> 
<script>
  var moves = 0;
$(".arrow").one("click", function() {
  var id = $(this).attr("id");
  moves++;
  if(id == "X"){
  console.log("igga");
  $("#" + id).removeClass("arrow");
  $("#" + id).addClass("Treasure");
  var score = moves; // Example JavaScript variable
    $.ajax({
      url: "game.php", // Current page URL
      type: "POST",
      data: { score: score }, // Send score variable to PHP
      success: function(response) {
        console.log(response); // Handle PHP response here
      }
    })
    <?php
// Handle AJAX request here
if (isset($_POST['score'])) {
  $score = $_POST['score'];
  // Do something with score variable
  echo "<h1>gggg</h1>";
}
else{
  echo "<h1>nigggg</h1>";
}
?>
  $("#my-button").css("display", "block");
}
else{
  $(this).html(id);
}
   $("#movecounter").html(moves);})
</script>

</body>
</html>