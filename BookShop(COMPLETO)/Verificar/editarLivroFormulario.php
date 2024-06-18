<?php
require '../conexao.php';

if (isset($_GET['id'])) {
    $id_livro = $_GET['id'];

    $sql = "SELECT * FROM Livros WHERE id_livro = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $id_livro);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $livro = $stmt->fetch(PDO::FETCH_ASSOC);
    }
} else {
    header("Location: ../Livros.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/formularioProdutos.css">
    <title>Editar Livro</title>
</head>

<body>
    <div id="conteiner">
        <div id="formulario">
            <h1 id="Titulo1">Editar Livro:</h1>
            <form action="editarLivro.php" method="POST">
                <input type="hidden" name="id_livro" value="<?php echo $livro['id_livro']; ?>">
                <div class="input">
                    <input id="Titulo" type="text" placeholder="Titulo" name="Titulo" value="<?php echo htmlspecialchars($livro['titulo']); ?>">
                </div>
                <div class="input">
                    <input id="Autor" type="text" placeholder="Autor" name="Autor" value="<?php echo htmlspecialchars($livro['autor']); ?>">
                </div>
                <div class="input">
                    <input id="Paginas" type="number" placeholder="Numero de páginas" name="Paginas" value="<?php echo $livro['paginas']; ?>">
                </div>
                <div class="input">
                    <input id="ISBN" placeholder="ISBN" name="ISBN" value="<?php echo htmlspecialchars($livro['isbn']); ?>">
                </div>
                <div class="input">
                    <input id="Estoque" type="number" placeholder="Quantidade em estoque" name="Estoque" value="<?php echo $livro['estoque']; ?>">
                </div>
                <div class="input">
                    <input id="Editora" type="text" placeholder="Editora" name="Editora" value="<?php echo $livro['id_editora']; ?>">
                </div>
                <div id="botao">
                    <input type="submit" value="Salvar" id="botao" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>