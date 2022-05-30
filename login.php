<?php

  $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">

  <title>Cadastro Médico - PADRÃO</title>

  <!-- jquery - link cdn -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

  <script>



  </script>

  <!-- bootstrap - link cdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>

  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" style="display: flex; justify-content:center;">
      <div class="navbar-header">

        <img src="imagens/icone_padrao.png" />
      </div>

    </div>
  </nav>


  <div class="container">

    <br /><br />

    <div class="col-md-4"></div>
    <div class="col-md-4">
      <h3>Entrar</h3>
      <br />
      <form method="post" action="acessar.php" id="formLogin">
        <div class="form-group">
          <label>
            Login:
          </label>
          <input type="text" class="form-control" id="login" name="login" placeholder="Login" required="requiored">
        </div>

        <div class="form-group">
          <label>
            Senha:
          </label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
        </div>
        <button type="buttom" class="btn btn-danger form-control" id="btn_login">Entrar</button>

      </form>

      <?php

        if($erro == 1){

          echo '<font color = "#F0000"> Usuário ou senha inválidos </font>';

        }

      ?>

    </div>
    <div class="col-md-4"></div>

    <div class="clearfix"></div>
    <br />
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>

  </div>


  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>