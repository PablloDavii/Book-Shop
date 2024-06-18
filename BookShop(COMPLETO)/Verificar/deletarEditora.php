<?php
 if(isset($_POST['id_editora'])){
   require '../conexao.php';
   $nome = $_POST['nome'];
   $id_editora = $_POST['id_editora'];
   
   $sql = "DELETE FROM Editoras WHERE id_editora = :id_editora";
   $result = $conn->prepare($sql);
   $result->bindValue(":id_editora", $id_editora);
   $result->execute();
   
   header("Location: ../Editoras.php");
}