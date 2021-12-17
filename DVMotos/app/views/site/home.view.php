<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home | DVMotos Store</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../../../public/css/css_home.css">
  </head>
  <body>

    <!-- navbar -->
    <?php require('navbar.php'); ?>

    <!-- carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">

      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="d-block w-100" src="../../../public/img/carrossel-1.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="../../../public/img/carrossel-2.jpg" alt="Segundo Slide">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="../../../public/img/carrossel-3.jpg" alt="Terceiro Slide">
          </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
      </a>
    </div>

    <!-- cards últimos produtos -->

    <h2 class="text-center my-3">ÚLTIMOS PRODUTOS</h2>

    <div class="row justify-content-between">

      <?php $i = 0; ?>
      <?php foreach ($produtos as $produto) : ?>
      <?php if(++$i > 4) break; ?>
      <div class="col-sm my-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="../../../public/img/img_card.jpg" class="card-img-top" alt="Produto">
          <div class="card-body">
            <p class="card-text"><?= $produto->nome?></p>
            <h5 class="card-title">R$ <?= $produto->preco?></h5>
            <a href="/produto?id=<?= $produto->id?>" class="btn btn-warning botao-padrao">Mais informações</a>
          </div>
        </div>
      </div>
      <?php endforeach;?>

    </div>

    <div id="botao-produtos" class="d-flex justify-content-center">
      <a href="/produtos" class="btn btn-warning botao-padrao">Ver mais produtos</a>
    </div>

    <div class="linha"></div>

    <!-- Call to actions -->

    <div class="row justify-content-between"> 
      <div class="col-sm my-3 d-flex justify-content-center call-to-action">
        <div class="card-body">
          <h3>FALE COM A GENTE!</h3>
          <a href="/contato" class="btn btn-warning btn-call-to-action">CONTATO</a>
        </div>
      </div>

      <div class="col-sm my-3 d-flex justify-content-center call-to-action">
        <div class="card-body">
          <h3>CONHEÇA MAIS SOBRE NOSSA EMPRESA!</h3>
          <a href="/quem-somos" class="btn btn-warning btn-call-to-action">QUEM SOMOS</a>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php require('footer.php'); ?>

    <script src="scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>