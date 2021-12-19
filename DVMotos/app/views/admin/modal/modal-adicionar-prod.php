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
        <form action="/produtos/create" method="POST" enctype="multipart/form-data">
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
                <option value="motocicleta">Motocicleta</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <br>
              <div class="form-group">
                <label for="form-imagem"><h5>Imagem</h5></label>
                <input type="file" class="form-control-file" id="form-imagem" name="imagem" required>
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