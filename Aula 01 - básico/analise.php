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
      <h2>Resultado do FGTS</h2>

      <?php

        $nomeCliente = $_POST["nome"];
        $salarioCliente = $_POST["salario"];

        $resultadoMensal =  $salarioCliente*0.08;

        echo "nome do cliente é: $nomeCliente, salário é: $salarioCliente, e o recolhimento mensal é $resultadoMensal"

      ?>

      <br>

      <a href="/programacao-php/formulario.php"> <- Voltar </a>


    </section>
  </body>
</html>
