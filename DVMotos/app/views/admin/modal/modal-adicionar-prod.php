<!-- Modal Adicionar -->
<div class="modal fade" id="adicionarProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/produtos/create" method="POST">
          <div class="modal-body">
            <!--Form Modal Adicionar-->
            <div class = "formularioAdicionar">
              <input class="form-control" type="text" name="nome" placeholder="Nome">
              <br>
              <input class="form-control" type="text" name="descricao" placeholder="Descrição">
              <br>
              <input class="form-control" type="text" name="preco" placeholder="Preço">
              <br>
              <select class="form-control" id="exampleFormControlSelect1" name="categoria">
                
                <option selected>Selecione uma categoria</option>
                <?php foreach($categorias as $categoria) : ?>
                  <option value="<?=$categoria->nome?>"><?=$categoria->nome?></option>
                <?php endforeach; ?>
              </select>
              <br>

              <div class="form-group">
                <label for="form-imagem"><h5>Imagem</h5></label>
                <input type="file" name="imagem" class="form-control-file" id="form-imagem">
              </div>

            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-warning btn-amarelo">Salvar</button>
            <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
          </div>
        </form>
        <!--Fim Form Modal Adicionar-->
        </div>
      </div>
    </div>