<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['Titulo']) && !empty($_POST['Titulo']) && 
        isset($_POST['Autor']) && !empty($_POST['Autor']) && 
        isset($_POST['Paginas']) && !empty($_POST['Paginas']) && 
        isset($_POST['ISBN']) && !empty($_POST['ISBN']) && 
        isset($_POST['Estoque']) && !empty($_POST['Estoque']) && 
        isset($_POST['id_editora']) && !empty($_POST['id_editora'])) {
        
        require '../conexao.php';
        
        $Titulo = $_POST['Titulo'];
        $Autor = $_POST['Autor'];
        $Paginas = $_POST['Paginas'];
        $ISBN = $_POST['ISBN'];
        $Estoque = $_POST['Estoque'];
        $id_editora = $_POST['id_editora'];
        
        $sql = "INSERT INTO Livros (titulo, autor, paginas, isbn, estoque, id_editora) 
                VALUES (:titulo, :autor, :paginas, :isbn, :estoque, :id_editora)";
        
        $result = $conn->prepare($sql);
        $result->bindValue(":titulo", $Titulo);
        $result->bindValue(":autor", $Autor);
        $result->bindValue(":paginas", $Paginas);
        $result->bindValue(":isbn", $ISBN);
        $result->bindValue(":estoque", $Estoque);
        $result->bindValue(":id_editora", $id_editora);
        
        if ($result->execute()) {
            header('Location: ../Livros.php');
            exit;
        } 
}
}
