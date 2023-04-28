<?php
include 'databaze.php';

// Zpracování formuláře
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Ověření, zda jsou všechna pole vyplněna
  if (empty($email) || empty($password)) {
    echo "Všechna pole jsou povinná.";
  }
  // Ověření, zda se e-mail již nevyskytuje v databázi
  else {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "Tento e-mail již existuje v databázi.";
    }
    // Vložení nového uživatele do databáze
    else {
      $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
      if ($conn->query($sql) === TRUE) {
        echo "Registrace proběhla úspěšně.";
        header("Location: login.html");
        exit();
      } else {
        echo "Chyba při registraci: " . $conn->error;
      }
    }
  }
}
$conn->close();
?>