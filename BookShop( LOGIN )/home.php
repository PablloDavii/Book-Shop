<?php
session_start();
if(!isset($_SESSION['id_admiministrador'])){
  header('Location: login.php');
}
?>
<a href="Verificar/logout.php">Sair da conta!</a>
pagina inicial !!!
