<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <title>Programação Php</title>
  </head>
  <body>
    <section>
      <h1>Programação PHP</h1>

      <?php
            $nome="João da Silva";
            $idade=40;

            echo "Olá $nome, sua idade é $idade <br><br>";

            $quantidade = 2;
            $preco = 200;

            $resultado = $quantidade*$preco;

            echo "O resultado é $resultado";

        ?>
    </section>
  </body>
</html>
