<?php
session_start();
if (!isset($_SESSION['id_admiministrador'])) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/home.css">
  <title>Home</title>
</head>

<body>
  <?php
  require 'navbar.php';
  ?>
  <a href="Verificar/logout.php">Sair da conta!</a>
</body>

</html>