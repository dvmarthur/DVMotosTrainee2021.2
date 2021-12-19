<!-- Modal -->

<!-- Modal Editar -->
<div class="modal fade" id="editarUsuario-<?= $user->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <!--Form Modal Editar-->
            <div class = "formularioEditar">
              <form action="/users/update" method="POST">
                <input type="hidden" name="id" value="<?= $user->id ?>">
                <input class="form-control" type="text" name="nome" value="<?= $user->nome ?>" placeholder="<?= $user->nome ?>">
                <br>
                <input class="form-control" type="text" name="email" value="<?= $user->email ?>" placeholder="<?= $user->email ?>">
                <br>
                <input class="form-control" type="text" name="senha" value="<?= $user->senha ?>" placeholder="<?= $user->senha ?>">
                <br>
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