<?php
require 'conexao.php';
$sql = "SELECT * FROM livros AS l
INNER JOIN editoras AS e
ON l.id_editora = e.id_editora";
$result = $conn->prepare($sql);
$result->execute();
$Livros = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./CSS/Livros.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

  <title>Dashboard</title>
</head>

<body>
  <?php
  require 'navbar.php';
  ?>
  <h2>Lista de Produtos</h2>
  <a href="formularioProdutos.php">
          <button id="b-adicionar">

            <span>

              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
              </svg> Adicionar
            </span>
          </button>

        </a>
  <?php
  if (count($Livros) > 0) {
  ?>
  
    <div id="tabela">
      
      <div id="conteiner">
        
        <table class="tabela">

          <thead>

            <tr>
               
              <th>ID</th>
              
              <th>Titulo</th>

              <th>Autor</th>

              <th>Paginas</th>

              <th>ISBN</th>

              <th>Estoque</th>

              <th>Editora</th>

              <th style="text-align:center;">Ações</th>


            </tr>

          </thead>

          <tbody>
            <?php
            foreach ($Livros as $Livro) {
              echo "<tr>";
              echo "<td data-title='id_livro'>" . $Livro['id_livro'] . "</td>";
              echo "<td data-title='Titulo'>" . $Livro['titulo'] . "</td>";
              echo "<td data-title='Autor'>" . $Livro['autor'] . "</td>";
              echo "<td data-title='Paginas'>" . $Livro['paginas'] . "</td>";
              echo "<td data-title='ISBN'>" . $Livro['isbn'] . "</td>";
              echo "<td data-title='Estoque'>" . $Livro['estoque'] . "</td>";
              echo "<td data-title='Editora'>" . $Livro['nome'] . "</td>";
              echo "<td>
    <div class='botoes'>
        <form style='width: 50%;' class='form-excluir' method='post' action='Verificar/deletar.php'>
            <input type='hidden' name='id_livro' value='" . $Livro['id_livro'] . "'/>
            <button id='b-excluir' type='submit' class='botao-excluir'>Excluir</button>
        </form>
        <a style='width: 50%;' href='Verificar/editarLivroFormulario.php?id=" . $Livro['id_livro'] . "'>
            <button id='b-editar' class='botao-editar'>Editar</button>
        </a>
    </div>
</td>";

 echo "</tr>";
            }
            ?>
          </tbody>

        </table>
      </div>
    <?php
  } else {
    echo "<div class='conteiner-alerta'>
    <img src='imagem/cuidado.png'>
    <p>Você ainda não cadastrou nenhum livro!</p>
    </div>";
  }
    ?>
    </div>

</body>

</html>