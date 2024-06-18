<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/formularioEditoras.css">
    <title></title>
</head>

<body>
    <div id="conteiner">
        <div id="formulario">
            <h1 id="Titulo1">Cadastre uma editora:</h1>
            <form action="./Verificar/cadastrarEditora.php" method="POST" data-parsley-validate>
                <div class="input">

                    <input id="Nome" type="text" placeholder="Nome" name="Nome" required>
                </div>
                <div class="input">

                    <input id="Telefone" placeholder="Telefone" name="Telefone" required>
                </div>
                <div class="input">

                    <input id="Email" placeholder="E-mail" name="Email" required>
                </div>
                <div id="botao">
                    <input type="submit" value="Enviar" id="botao" name="submit" required>
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