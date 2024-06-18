<?php
 if(isset($_POST['id_livro'])){
   require '../conexao.php';
   $titulo = $_POST['titulo'];
   $id_livro = $_POST['id_livro'];
   
   $sql = "DELETE FROM Livros WHERE id_livro = :id_livro";
   $result = $conn->prepare($sql);
   $result->bindValue(":id_livro", $id_livro);
   $result->execute();
   
   header("Location: ../Livros.php");
}