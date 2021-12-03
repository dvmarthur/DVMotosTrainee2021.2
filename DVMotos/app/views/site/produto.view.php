<!DOCTYPE html>

<html>
  <head>
    <meta charset = "utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Produto DVMotos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel = "stylesheet" href = "../../../public/css/stylesViewProduto.css">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-4">
          <nav aria-label="Breadcrumb navigation" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="home.php">Página Inicial</a></li>
              <li class="breadcrumb-item"><a href="produtos.php">Produtos</a></li>
              <li class="breadcrumb-item active" aria-current="page">View Produto</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row">
        
        <div class="col-sm-7 colunaEsquerda">
          
          <img class = "foto1 mt-2" src="../../../public/img/imagem_moto.jpeg" alt="Imagem Moto">
          <img class = "foto2 mt-4 mb-4" src="../../../public/img/imagem_moto_2.jpeg" alt="Imagem Moto">
        </div>
        
        <div class="col-sm-5 mt-2 colunaDireita">

          <h4>Motocicleta</h4>
          <h1><b>Harley-Davidson</b></h1>
          <h2 class="mt-5">A partir de</h2>
          <h3><b>R$53.310</b></h3>
          <h2 class="mt-5">Escolha a cor: </h2>

              <div class="form-check form-check-inline Opcoes">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                  <label class="form-check-label" for="inlineRadio1">Preto</label>
                </div>
                <div class="form-check form-check-inline Opcoes">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                  <label class="form-check-label" for="inlineRadio2">Branco</label>
                </div>
                <div class="form-check form-check-inline Opcoes">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                  <label class="form-check-label" for="inlineRadio3">Prata</label>
                </div>
                
                <button type="button" class="btn btn-warning botao"><b>COMPRAR AGORA</b></button>
                
            <h5 class="mt-5 mb-3">Descrição:</h5>
            <div class="descricao mb-4">
              <p>Esta é a motocicleta certa para quem busca o estilo icônico de uma Harley Davidson e o ronco do V-Twin.</p>
              <p>Potência de peso médio combinada com dirigibilidade de precisão.</p>
              <p>Motor V-Twin Evolution de 883 cm³ refrigerado a ar.</p>
              <p>Estilo Harley-Davidson autêntico em todos os detalhes, esbanjando força. O motor Evolution® de 883 cm3 com suportes de borracha oferece força e leveza por milhares de quilômetros. Você vai se preocupar apenas em aproveitar a liberdade das avenidas e ruas.</p>
            </div>
        </div>
      </div>
    </div>

  </body>

</html>