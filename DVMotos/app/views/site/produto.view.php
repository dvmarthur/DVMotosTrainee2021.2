<!DOCTYPE html>

<html>
  <head>
    <meta charset = "utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Produto | DVMotos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "../../../public/css/stylesViewProduto.css">

    <link rel="shortcut icon" href="../../../public/assets/favicon-circulo2.png">
  </head>

  <body>

  <?php require('navbar.php'); ?>

    <div class="container">

      <div class="row">
        <div class="col-md-7 mt-4">
          <nav aria-label="Breadcrumb navigation" role="navigation">
            <ol class="breadcrumb links">
              <li class="breadcrumb-item"><a class="link-pagina" href="/">Página Inicial</a></li>
              <li class="breadcrumb-item"><a class="link-pagina" href="/produtos">Produtos</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $produtos[0]->nome?></li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        
        <div class="col-sm-7 colunaEsquerda">
          
          <img class = "foto1 mt-2" src="../../public/produtos/<?= $produtos[0]->imagem?>" alt="Imagem Moto">
          <!-- <img class = "foto2 mt-4 mb-4" src="../../../public/img/imagem_moto_2.jpeg" alt="Imagem Moto"> -->
        </div>
        
        <div class="col-sm-5 mt-2 colunaDireita">

          <h4><?= $produtos[0]->categoria?></h4>
          <h1><b><?= $produtos[0]->nome?></b></h1>
          <h2 class="mt-5">A partir de</h2>
          <h3><b>R$<?= $produtos[0]->preco?></b></h3>
                
                <button type="button" class="btn btn-warning botao"><b>COMPRAR AGORA</b></button>
                
            <h5 class="mt-5 mb-3">Descrição:</h5>
            <div class="descricao mb-4">
              <?= $produtos[0]->descricao?>
            </div>
        </div>
      </div>
    </div>

    <?php require('footer.php'); ?>
  </body>

</html>