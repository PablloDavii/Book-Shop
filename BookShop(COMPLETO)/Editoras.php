<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'conexao.php';
$sql = "SELECT * FROM Editoras";
$result = $conn->prepare($sql);
$result->execute();
$Editoras = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./CSS/editoras.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">

  <title>e</title>
</head>

<body>
  <?php
  require 'navbar.php';
  ?>
  <h2>Lista de Editoras</h2>
  <a href="formularioEditoras.php">
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
  if (count($Editoras) > 0) {
  ?>
    <div id="tabela">
      
      <div id="conteiner">
        
        <table class="tabela">

          <thead>

            <tr>
              <th>ID</th>

              <th>Nome</th>

              <th>Telefone</th>

              <th>E-mail</th>

              <th style="text-align:center;">Ações</th>

            </tr>

          </thead>

          <tbody>
            <?php
            foreach ($Editoras as $Editora) {
              echo "<tr>";
              echo "<td data-title='id_editora'>" . $Editora['id_editora'] . "</td>";
              echo "<td data-title='Nome'>" . $Editora['nome'] . "</td>";
              echo "<td data-title='Telefone'>" . $Editora['telefone'] . "</td>";
              echo "<td data-title='E-mail'>" . $Editora['email'] . "</td>";
              echo "<td>
              <div class='botoes'>
                  <form style='width: 50%;'class='form-excluir' method='post' action='Verificar/deletarEditora.php'>
                      <input type='hidden' name='id_editora' value='" . $Editora['id_editora'] . "'/>
                      <button id='b-excluir' type='submit' class='botao-excluir'>Excluir</button>
                  </form>
                 <a style='width: 50%;' href='Verificar/editarEditoraFormulario.php?id=" . $Editora['id_editora'] . "'>
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