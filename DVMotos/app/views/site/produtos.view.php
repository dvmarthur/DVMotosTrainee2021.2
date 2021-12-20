<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Produtos | DVMotos Store</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="../../../public/css/css_produtos.css">

      <link rel="shortcut icon" href="../../../public/assets/favicon-circulo2.png">
  </head>
  <body>

    <!-- navbar -->
    <?php require('navbar.php'); ?>

    <!-- corpo da página -->

      <!-- breadcrumb e busca -->
      <section class="header-main border-bottom">
        <div class="container-fluid">
          <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
            
            <div class="col-md-4 links">
              <nav aria-label="Breadcrumb navigation" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="link-pagina" href="/">Página Inicial</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                </ol>
              </nav>
            </div>

            <div class="col-md-8">
              <form action="/produtos/pesquisa" method="GET">
                <div class="row">
                  <div class="col-md-10">
                    <input type="search" name="pesquisa" class="form-control inputpesquisa" placeholder="Pesquisar...">
                  </div>
                  <div class="col-md-2">
                    <button class="btn btn-warning botao-pesquisa" type="submit"><i class="bx bx-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </section>
      <!-- fim do breadcrumb e busca -->

        <div class="row justify-content-between destaque-produtos">
          
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../../../public/img/banner-teste.png" alt="Primeiro slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../../../public/img/banner-teste.png" alt="Segundo slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../../../public/img/banner-teste.png" alt="Terceiro slide">
                </div>
              </div>
            </div>
        </div>
        
      
        <!-- cards produtos -->

        <div class="row justify-content-between geral-produtos">
            <?php foreach ($produtos_paginacao as $produto) : ?>
            <div class="col-sm my-3 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
                <img src="../../public/produtos/<?= $produto->imagem?>" class="card-img-top" alt="Produto">
                <div class="card-body">
                  <h4 class="card-text"><a class="link-categoria" href="#"><?= $produto->categoria?></a></h4>
                  <p class="card-text"><a class="link-produto" href="#"><?= $produto->nome?></a></p>
                  <h5 class="card-title">R$ <?= $produto->preco?></h5>
                  <a href="/produto?id=<?= $produto->id?>" class="btn btn-warning botao-padrao">Mais informações</a>
                </div>
              </div>
            </div>
            <?php endforeach;?>
        </div>

        <!-- fim dos cards dos produtos -->

        <!-- paginação -->

        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
              
            <?php 
              $total_paginas = ceil($total_paginas);
              $pagina_anterior = $pagina - 1;
              $proxima_pagina = $pagina + 1;
            ?>

            <li class="page-item">
              <a class="page-link link-pagina" href="/produtos?pagina=<?php echo $pagina_anterior ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
              </a>
            </li>

            <?php for ($i = 1; $i < $total_paginas + 1; $i++) { ?>
              <li class="page-item"> <a class="page-link link-pagina" href="/produtos?pagina=<?php echo $i ?>"> <?php echo $i ?> </a></li>
            <?php } ?>

            <li class="page-item">
              <a class="page-link link-pagina" href="/produtos?pagina=<?php echo $proxima_pagina ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Próxima</span>
              </a>
            </li>

          </ul>
        </nav>
        <!-- fim da paginação -->

    <!-- footer -->
    <?php require('footer.php'); ?>
    
    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>