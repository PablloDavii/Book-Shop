<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/formularioProdutos.css">
  <title>Cadastro de Livros</title>
</head>

<body>
<div id="conteiner">
  <div id="formulario">
    <h1 id="Titulo1">Cadastre um livro:</h1>
    <form action="Verificar/cadastrarLivro.php" method="POST" data-parsley-validate>
      <div class="input">
        <input id="Titulo" type="text" placeholder="Titulo" name="Titulo" required>
      </div>
      <div class="input">
        <input id="Autor" type="text" placeholder="Autor" name="Autor" required>
      </div>
      <div class="input">
        <input id="Paginas" type="number" placeholder="Numero de páginas" name="Paginas" required>
      </div>
      <div class="input">
        <input id="ISBN" placeholder="ISBN" name="ISBN" required>
      </div>
      <div class="input">
        <input id="Estoque" type="number" placeholder="Quantidade em estoque" name="Estoque" required>
      </div>
      <div >
      
      <div class="inputSelect">
      <select name="id_editora">
      <option>Selecione uma editora</option>
      <?php
      require 'conexao.php'; 

       $sql = "SELECT * FROM editoras";
       $stmt = $conn->query($sql); 

      while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
      echo "<option value='" . $row->id_editora . "'>" . $row->nome . "</option>";
  }
  ?>
</select>
<div>


      </div>
      <div id="botao">
        <input type="submit" value="Enviar" id="botao" name="submit">
      </div>
    </form>
  </div>
</div>
<script src="node_modules/jquery/dist//jquery.min.js"></script>
  <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
  <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
  <link rel="stylesheet" href="node_modules/parsleyjs/src/parsley2.css">
</body>

</html>
