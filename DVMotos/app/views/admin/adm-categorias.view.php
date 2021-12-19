<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ADM Categoria | DVMotos Store</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <link rel="stylesheet" href="../../../public/css/css_adm_Produtos.css">

      <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
        });
      </script>

  </head>
  <body>

    <!-- navbar -->

    <!-- corpo da página -->

      <!-- breadcrumb e busca -->
      <section class="header-main border-bottom">
        <div class="container-fluid">
          <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
            
            <div class="col-md-4">
              <nav aria-label="Breadcrumb navigation" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="adm-dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ADM Categoria</li>
                </ol>
              </nav>
            </div>

            <div class="col-md-8">
                <div class="d-flex form-inputs"> <input class="form-control" type="text" placeholder="Digite o nome da categoria"> <i class="bx bx-search"></i> </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Fim do breadcrumb e busca -->

      <!-- Tabela de Categorias -->

      <div class="d-flex justify-content-between align-items-center mb-2 mt-4 mr-4">
        <h4 class="mt-2 mb-2 header-title"></h4>
        <a data-target="#adicionarProduto"  class="btn btn-warning btn-preto" data-toggle="modal">
          <i class="ri-add-circle-fill"></i> Adicionar Categoria
        </a>
      </div>
      <div class="card">
        <div class="card-body">
          <table class="table" style="border-collapse: collapse; border-spacing: 0; ">
            <thead class="thead-dark">
              <tr>
                <th>Categoria</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($categorias as $categoria):?> 
            <?php require 'modal-edit-categorias.php'?>
            <tr>
                <td><?= $categoria->nome?></td>
              
                <td>
                <form action="delete" method="POST">
                <a data-target="#editarCategoria-<?= $categoria->id ?>" class="edit" title="Editar" data-toggle="modal"><i class="material-icons">&#xE254;</i></a>
                      <input type="hidden" value="<?= $categoria->id ?>" name="id">
                      <button type="submit" id="completed-task" class="botao_deletar">
                                <i class="material-icons">&#xE872;</i>
                          </button>
                    </form>
                </td>
              </tr>
              <?php endforeach;?>

            </tbody>
          </table>
        </div>
      </div>

      <!-- Fim da tabela de categorias -->

   
    <!-- Fim da paginação -->

    <!-- Modal Adicionar -->

    <div class="modal fade" id="adicionarProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar Categoria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>       
        <div class="modal-body">


            <!--Form Modal Adicionar-->

            <div class = "formularioAdicionar">
            <form action="createCategoria" method="POST">
              <input class="form-control" type="text" name="categoryName" placeholder="Nome da Categoria">
              <br>
            </div>

            <!--Fim Form Modal Adicionar-->
            
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning btn-amarelo" type="submit">Salvar mudanças</button>
          <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
        </div>
        </div>
        </form>
      </div>
    </div>

    <!-- Fim modal -->

    <!-- footer -->

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>