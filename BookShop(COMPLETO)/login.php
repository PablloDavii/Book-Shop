<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
  <div id="Card-Login">
    <div id="conteiner-esquerdo">

      <p>Bem vindo a <span>Book Shop</span>. </p>
    </div>
    <div id="conteiner-formulario">
      <div id="formulario">
        <form action="Verificar/logar.php" method="post" data-parsley-validate>
          <p id="loginTitulo">Login</p>
          <?php
          if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 'ok') :
          ?>
            <p>Usuário cadastrado com sucesso!</p>
          <?php
          endif;
          ?>
          <?php
          if (isset($_GET["erro"]) && $_GET["erro"] == 'ok') :
          ?>
            <p>Usuário ou senha incorretos!</p>

          <?php
          endif;
          ?>
          <div class="input">

            <input id="email" type="email" name="email" placeholder="E-mail*" required>
          </div><br>
          <div class="input">

            <input class="input" id="senha" type="password" name="senha" placeholder="Senha*" required>
          </div><br>
          <div id="botao">
            <input type="submit" value="Entrar" name="submit" id="botao">
          </div>

        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
      </div><br>
    </div>

  </div>

  <script src="node_modules/jquery/dist//jquery.min.js"></script>
  <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
  <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
  <link rel="stylesheet" href="node_modules/parsleyjs/src/parsley.css">
</body>

</html>