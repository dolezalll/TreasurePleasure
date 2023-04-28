<?php 
session_start();
include 'databaze.php';

// Zpracování formuláře
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Ověření, zda jsou všechna pole vyplněna
  if (empty($email) || empty($password)) {
    echo "Všechna pole jsou povinná.";
  }
  // Ověření, zda se e-mail a heslo shodují s údaji v databázi
  else {
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "Přihlášení proběhlo úspěšně.";
      while($row = $result->fetch_assoc()) {
        $_SESSION['userID'] =$row["id"];
      }

      
      // přesměrování na hlavní stránku po úspěšném přihlášení
      $_SESSION["userLoged"] = true;
      header("Location: profile.php");
      exit();
    } else {
      echo "Nesprávné přihlašovací údaje.";
    }
  }
}
$conn->close();
?>