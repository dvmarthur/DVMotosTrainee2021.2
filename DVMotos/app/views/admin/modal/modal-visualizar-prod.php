<!-- Modal Visualizar -->
<div class="modal fade" id="visualizarProduto-<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><?= $produto->nome?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">

              <div class="row">
                <img src="../../../public/img/heritage-classic.png" alt="Imagem do produto" class="w-100 rounded">
              </div>

              <div class="texto-modal">
                <div class="row">
                  <div class="col-sm-6">
                    <h3>Preço: </h3>
                    <p>R$ <?= $produto->preco?></p>
                  </div>
                  <div class="col-sm-6">
                    <h3>Categoria: </h3>
                    <p><?= $produto->categoria?></p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <h3>Descrição: </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p><?= $produto->descricao?></p>
                  </div>
                </div>              
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-amarelo" data-dismiss="modal" data-toggle="modal" data-target="#editarProduto-<?= $produto->id ?>">Editar</button>
            <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>