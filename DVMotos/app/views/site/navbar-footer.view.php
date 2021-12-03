<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar-Footer</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1e335b449c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/css/navbar-footer.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-home">
        <a class="navbar-brand" href="#">
            <img src="../../../public/assets/5.png" class="logo" width="60" height="60" alt="">
          </a>
          <a class="navbar-brand" href="#">
            <img src="../../../public/assets/7.png" class="logo" width="90" height="45" alt="">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produtos.php">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sobre
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="contatos.php">Contato</a>
                <a class="dropdown-item" href="quemsomos.php">Quem Somos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais aqui</a>
              </div>
            </li>
            <li class="nav-item">
            </li>
          </ul>

          
        </div>
  </nav>
  <section class="footer-DVM">
    <!-- Footer -->
    <footer class="bg-secondary text-white">
      <!-- Grid container -->
      <div class="container p-4">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <img src="../../../public/assets/11.png" class="logo-footer" width="250" height="250">
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Navegação</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="home.php">Home</a>
            </li>
              <li>
                <a href="produtos.php">Produtos</a>
            </li>
              <li>
                <a href="login.php">Login</a>
            </li>
              <li>
                <a href="contatos.php">Contatos</a>
            </li>
              <li>
                <a href="quemsomos.php">Quem Somos</a>
            </li>
            </ul>
          </div>
          <!--Grid column-->
  
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0">Redes Sociais</h5>
  
            <ul class="list-unstyled">
              <li>
                <a href="#!" class="fab fa-facebook-square"></a>
                <span>Facebook</span>
              </li>
              <li>
                <a href="#!" class="fab fa-twitter"></a>
                <span>Twitter</span>
              </li>
              <li>
                <a href="#!" class="fab fa-instagram"></a>
                <span>Instagram</span>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: black;">
        Code JR Trainee - 2021
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
    <script src="scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>