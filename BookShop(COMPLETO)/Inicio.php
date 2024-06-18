<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="CSS/inicio.css">
</head>

<body>
  <?php
  require 'navbar.php';
  ?>
  <div id="conteiner1">
    <h1>Seja bem-vindo, a Book Shop!<h1>
  </div>
  <h2 id='titulo' style="font-size: 40px">Top 5 editoras mais cadastradas!<h2>
      <?php
      require 'conexao.php';

      $sql = "SELECT e.nome AS editora, COUNT(l.id_livro) AS total_livros
            FROM Editoras e
            LEFT JOIN Livros l ON e.id_editora = l.id_editora
            GROUP BY e.id_editora
            ORDER BY total_livros DESC
            LIMIT 5";

      $stmt = $conn->prepare($sql);
      $stmt->execute();

      if ($stmt->rowCount() > 0) {
        echo "<div id='conteiner2'>";

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<div class='card'>";
          echo "<div class='card-details'>";
          echo "<p class='text-title'>" . htmlspecialchars($row["editora"]) . "</p>";
          echo "<p class='text-body'>Total de Livros: " . $row["total_livros"] . "</p>";

          echo "</div>";
          echo "<a href='Editoras.php' ><button class='card-button'>Saiba mais</button></a>";
          echo "</div>";
        }
      }
      echo "</div>";
      ?>

</body>

</html>