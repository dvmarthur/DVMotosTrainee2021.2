<!-- Modal Editar -->
<div class="modal fade" id="editarProduto-<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!--Form Modal Editar-->
            <div class = "formularioEditar">

            <form action="/produtos/update" method="POST">
              <input type="hidden" name="id" value="<?= $produto->id ?>">

              <input class="form-control" type="text" name="nome" value="<?= $produto->nome ?>" placeholder="<?= $produto->nome ?>"> 
              <br>
              <input class="form-control" type="text" name="descricao" value="<?= $produto->descricao ?>" placeholder="<?= $produto->descricao ?>">
              <br>
              <input class="form-control" type="text" name="preco" value="<?= $produto->preco ?>" placeholder="<?= $produto->preco ?>">
              <br>
              <select class="form-control" name="categoria" id="exampleFormControlSelect1">
                <option>Motocicleta</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <br>
                <div class="form-group">
                  <label for="exampleFormControlFile1"><h5>Imagem</h5></label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <!--Fim Form Modal Editar-->
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning btn-amarelo">Salvar mudanças</button>
          </form>
          <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
        </div>
        </div>
      </div>
    </div>