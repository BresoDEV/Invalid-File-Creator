<?php

$d = __DIR__;
if (is_dir($d)) {
  if ($h = opendir($d)) {
    while (false !== ($f = readdir($h))) {
      if (is_file($d . '/' . $f) && pathinfo($f, PATHINFO_EXTENSION) !== 'php') {
        unlink($d . '/' . $f);
      }
    }
    closedir($h);
  }
}




if (isset($_GET['extensao']) && $_GET['extensao'] !== 'index.php' && $_GET['extensao'] !== 'index.html') {
  if (isset($_GET['baixar'])) {
    //$_GET['extensao'] = str_replace('.', '', $_GET['extensao']);

    $c = 'N1N]pÏùùµªÇFdO]Ê#~rô–~J©Æó¿7WºÈåù6ÆJd¦W‰lS§€^o½²ef™¦hhþ²ÿRŸ!PgyVn…ñuöõw*ê>©„åN™‡';
    $s = '';
    for ($i = 0; $i < ($_GET['tamanho'] * 1023800); $i++) {
      $ca = $c[rand(0, strlen($c) - 1)];
      $s .= $ca;
    }

    file_put_contents($_GET['extensao'], $s);
  } else if (isset($_GET['baixarA'])) {
    //$_GET['extensao'] = str_replace('.', '', $_GET['extensao']);

    $c = 'N1N]pÏùùµªÇFdO]Ê#~rô–~J©Æó¿7WºÈåù6ÆJd¦W‰lS§€^o½²ef™¦hhþ²ÿRŸ!PgyVn…ñuöõw*ê>©„åN™‡';
    $s = '';
    for ($i = 0; $i < rand(0, 1000000000000); $i++) {
      $ca = $c[rand(0, strlen($c) - 1)];
      $s .= $ca;
    }

    file_put_contents($_GET['extensao'], $s);
  } else {
    unlink($_GET['extensao']);
  }
}



?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  * {
    color: aliceblue;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    background-color: #333;
  }

  .wrapper {
    width: 80%;
    max-width: 700px;
    margin-top: 5%;
  }

  .container {
    background-color: #666;
    padding: 3em;
    border-radius: 0.5em;
  }

  a {
    background-color: #1e2e2d;
    color: #f69f40;
    padding: 1.5em 0;
    display: block;
    text-align: center;
    text-decoration: none;
    border-radius: 0.5em;
    margin-top: 10px;
  }

  .container h1 {
    color: aliceblue;
  }

  label {
    display: block;
    color: aliceblue;
    margin-bottom: 0.3em;
  }

  label[for="text1"] {
    margin-top: 2em;
  }

  input#text1 {
    margin-bottom: 2em;
  }

  input,
  textarea,
  select,
  option {
    display: block;
    width: 100%;
    padding: 1em 0.5em;
    border-radius: 0.3em;
    background-color: #333;
    border: none;
    outline: none;
    color: aliceblue;
    margin-top: 5px;
  }

  button {
    display: block;
    margin: 2em auto 1em auto;
    background-color: #29a36c;
    color: aliceblue;
    padding: 1em 2em;
    border: none;
    outline: none;
    border-radius: 0.5em;
    font-weight: bold;
    margin-top: 10px;
  }

  p {
    color: aliceblue;
    text-align: center;
  }
</style>

<body>
  <center>
    <div class="wrapper">
      <div class="container">

        <?php
        if (isset($_GET['extensao'])) {
          if (stripos($_GET['extensao'], 'php') !== false || stripos($_GET['extensao'], 'html') !== false) {
            echo '<h2 style="color:red">Arquivo inválido</h2><br><br>';
          } else {
            echo '<h2>Corrupt File Creator</h2><br><br>';
          }
        } else {
          echo '<h2>Corrupt File Creator</h2><br><br>';
        }


        ?>

        <?php
        //1023800
        if (isset($_GET['extensao'])) {
          if (stripos($_GET['extensao'], 'php') !== false || stripos($_GET['extensao'], 'html') !== false) {
            echo '
            <form action="" method="get">
            Nome do arquivo + extensao:
            <br><input type="text" name="extensao" value="trabalho.pdf" required><br>
            Tamanho (MB):
            <br><input type="number" name="tamanho" min="1" value="5" required><br>
            <button type="submit" name="baixar">Gerar</button>
            <button type="submit" name="baixarA">Gerar com Tamanho Aleatorio</button>
          </form>
            ';
          } else {
            echo '<br><a href="' . $_GET['extensao'] . '" download>Baixar arquivo gerado</a>';
            echo '<br><a href="index.php">Voltar</a>';
          }

        } else {

          echo '
          <form action="" method="get">
          Nome do arquivo + extensao:
          <br><input type="text" name="extensao" value="trabalho.pdf" required><br>
          Tamanho (MB):
          <br><input type="number" name="tamanho" min="1" value="5" required><br>
          <button type="submit" name="baixar">Gerar</button>
          <button type="submit" name="baixarA">Gerar com Tamanho Aleatorio</button>
        </form>
          ';
        }



        ?>

      </div>

    </div>
  </center>

  <script>


  </script>
</body>

</html>