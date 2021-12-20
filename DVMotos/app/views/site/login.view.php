<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | DVMotos Store</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1e335b449c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/css/login.css">

    <link rel="shortcut icon" href="../../../public/assets/favicon-circulo2.png">
</head>
<body>
  
  <?php require('navbar.php'); ?>
  
  <div class="login">      
        <form class="px-4 py-3" method="POST" action="/login/entrar" id="formlogin" name="formlogin">
          <a class="navbar-brand" href="#">
            <img src="../../../public/assets/moto1.png" class="logo" width="60" height="60" alt="">
          </a>
          <div class="form-group">
            <label for="login">Endereço de email</label>
            <input type="email" class="form-control" name="email" id="login" placeholder="email@exemplo.com">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
          </div>

              <button class="btn btn-warning btn-call-to-action" type="submit">Entrar</button>
            
        </form>

      </div>

    <script src="scripts.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>