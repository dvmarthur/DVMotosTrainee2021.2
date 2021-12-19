<div class="modal fade" id="editarCategoria-<?= $categoria->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <!--Form Modal Editar-->

            <div class = "formularioEditar">
            <form action="/categorias/update" method="POST">
            <input type="hidden" name="id" value="<?= $categoria->id ?>">
            <input class="form-control" type="text" name="nome" placeholder="Nome da Categoria" value="<?= $categoria->nome ?>" placeholder="<?= $categoria->nome ?>">
              <br>

            </div>

            <!--Fim Form Modal Editar-->

        </div>
        <div class="modal-footer">
          <button class="btn btn-warning btn-amarelo" type="sumbmit">Salvar mudanças</button>
          <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
        </div>
        </div>
        </form>
      </div>
    </div>