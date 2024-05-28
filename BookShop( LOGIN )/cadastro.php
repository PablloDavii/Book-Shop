<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div id="Card-Login">
       
      
      
      <div id="conteiner-esquerdo">
        <p>Bem vindo a <span>Book Shop</span>.</p>
      </div>
      <div id="conteiner-formulario">
        <div id="formulario">
        <p id="cadastroTitulo">Cadastro</p>
              

        <form action="Verificar/cadastrar.php" method="post" data-parsley-validate>
                    <div class="input">
                     
                        <input  id="email" 
                        name="email" type="email" placeholder="E-mail" required>
                    </div><br>
                    <div class="input">
                       
                        <input class="input" id="senha" type="password" name="senha" placeholder="Senha" required>
                    </div><br>
                    <div id="botao">
                        <input type="submit" name="submit" value="Cadastre-se" id="botao">
                    </div>
                  
                </form>
                  <p>Já uma conta? <a href="login.php">Entre</a></p>
            </div><br>
      </div>
      
    </div>
    
    <script src="node_modules/jquery/dist//jquery.min.js"></script>
    <script src="node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="node_modules/parsleyjs/src/parsley.css">
</body>

</html>