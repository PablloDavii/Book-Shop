<?php
require '../conexao.php';

if (isset($_GET['id'])) {
    $id_editora = $_GET['id'];

    $sql = "SELECT * FROM Editoras WHERE id_editora = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id_editora);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $editora = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} else {
    header("Location: ../Editoras.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/formularioEditoras.css">
    <title>Editar editora</title>
</head>

<body>
    <div id="conteiner">
        <div id="formulario">
            <h1 id="Titulo1">Editar Editora:</h1>
            <form action="editarEditora.php" method="POST">
                <input type="hidden" name="id_editora" value="<?php echo $editora['id_editora']; ?>">
                <div class="input">
                    <input id="Nome" type="text" placeholder="Nome" name="Nome" value="<?php echo htmlspecialchars($editora['nome']); ?>">
                </div>
                <div class="input">
                    <input id="Telefone" type="number" placeholder="Telefone" name="Telefone" value="<?php echo htmlspecialchars($editora['telefone']); ?>">
                </div>
                <div class="input">
                    <input id="Email" type="text" placeholder="E-mail" name="Email" value="<?php echo $editora['email']; ?>">
                </div>
                <div id="botao">
                    <input type="submit" value="Salvar" id="botao" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>