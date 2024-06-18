<?php
if (isset($_POST['submit'])) {
    if (
        isset($_POST['Nome']) && !empty($_POST['Nome']) &&
        isset($_POST['Telefone']) && !empty($_POST['Telefone']) &&
        isset($_POST['Email']) && !empty($_POST['Email'])
    ) {

        require '../conexao.php';

        $Nome = $_POST['Nome'];
        $Telefone = $_POST['Telefone'];
        $Email = $_POST['Email'];

        $sql = "INSERT INTO Editoras (nome, telefone, email) VALUES (:nome, :telefone, :email)";

        $result = $conn->prepare($sql);
        $result->bindValue(":nome", $Nome);
        $result->bindValue(":telefone", $Telefone);
        $result->bindValue(":email", $Email);

        if ($result->execute()) {
            header('Location: ../Editoras.php');
            exit;
        }
    } else {
        header("Location: ../Editoras.php");
    }
}
