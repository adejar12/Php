<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <style>
      .formulario{
        background-color: #808080;
        color: #fff;
        text-shadow: 1px 2px #000;
        padding: 10px;
        font-size: 1.8rem;
        font-weight: bold;
      }

      input{
        font-size: 1.7rem;
        padding: 4px;
        border-radius: 10px;
        border: solid;
        font-weight: bold;
      }
    </style>
    <title>Programação Php</title>
  </head>
  <body>
    <section>
      <h1>Programação PHP</h1>
      <h2>Insira as informações para o calculo de FGTS</h2>

      <div class="formulario">
        <form action="analise.php" method="post" target="">
          <label for="nome">Nome:</label><br>
          <input type="text" id="nome" name="nome" placeholder="Insira seu nome" required/><br>
          <label for="salario">Salário:</label><br>
          <input type="text" id="salario" name="salario" placeholder="Insira seu atual salário" required/>
          <br>
          <br>
          <input type="submit" name="ENVIAR"><br>
        </form>
      </div>


    </section>
  </body>
</html>
