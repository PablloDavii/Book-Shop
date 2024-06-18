<?php
require '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_livro = $_POST['id_livro'];
    $titulo = $_POST['Titulo'];
    $autor = $_POST['Autor'];
    $paginas = $_POST['Paginas'];
    $isbn = $_POST['ISBN'];
    $estoque = $_POST['Estoque'];
    $editora = $_POST['Editora'];

    $sql = "UPDATE Livros SET titulo = :titulo, autor = :autor, paginas = :paginas, isbn = :isbn, estoque = :estoque, id_editora = :editora WHERE id_livro = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':autor', $autor);
    $stmt->bindValue(':paginas', $paginas);
    $stmt->bindValue(':isbn', $isbn);
    $stmt->bindValue(':estoque', $estoque);
    $stmt->bindValue(':editora', $editora);
    $stmt->bindValue(':id', $id_livro);

    if ($stmt->execute()) {
        header("Location: ../Livros.php");
        exit();
    } else {
        header("Location: editarLivroFormulario.php");
    }
} else {
    header("Location: ../Livros.php");
}
