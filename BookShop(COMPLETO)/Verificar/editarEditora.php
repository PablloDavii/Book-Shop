<?php
require '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_editora = $_POST['id_editora'];
    $nome = $_POST['Nome'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['Email'];

    $sql = "UPDATE editoras SET nome = :nome, telefone = :telefone, email = :email WHERE id_editora = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':id', $id_editora);

    if ($stmt->execute()) {
        header("Location: ../Editoras.php");
        exit();
    } else {
        header("Location: editarEditoraFormulario.php");
    }
} else {
    header("Location: ../Editoras.php");
}
