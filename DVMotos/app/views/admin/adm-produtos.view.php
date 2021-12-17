<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ADM Produtos | DVMotos Store</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="../../../public/css/css_adm_produtos.css">

  </head>
  <body>

    <!-- navbar -->
    <?php require('adm-navbar.view.php'); ?>

    <!-- corpo da página -->
    <main>
        <!-- breadcrumb e busca -->
        <section class="header-main border-bottom">
          <div class="container-fluid">
            <div class="row p-2 pt-3 pb-3 d-flex align-items-center">
              
              <div class="col-md-4">
                <nav aria-label="Breadcrumb navigation" role="navigation">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="link-pagina" href="adm-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ADM Produtos</li>
                  </ol>
                </nav>
              </div>

              <div class="col-md-8">
                  <div class="d-flex form-inputs"> <input class="form-control" type="text" placeholder="Digite o nome do produto"> <i class="bx bx-search"></i> </div>
              </div>

            </div>
          </div>
        </section>
        <!-- fim do breadcrumb e busca -->

        <!-- tabela de produtos -->

        <div class="d-flex justify-content-between align-items-center mb-2 mt-4 mr-4">
          <h4 class="mt-2 mb-2 header-title"></h4>
          <a data-target="#adicionarProduto"  class="btn btn-warning btn-preto" data-toggle="modal">
            <i class="ri-add-circle-fill"></i> Adicionar Produto
          </a>
        </div>
        <div class="card">
          <div class="card-body">
            <table class="table" style="border-collapse: collapse; border-spacing: 0; ">
              <thead class="thead-dark">
                <tr>
                  <th>Nome</th>
                  <th>Categoria</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($produtos as $produto) : ?>

                  <?php require 'modal/modal-adicionar-prod.php' ?>
                  <?php require 'modal/modal-editar-prod.php' ?>
                  <?php require 'modal/modal-visualizar-prod.php' ?>

                <tr>
                  <td><?= $produto->nome?></td>
                  <td><?= $produto->categoria?></td>
                  <td>
                      <form action="/produtos/delete" method="POST" id="formDeletar">
                        <a data-target="#visualizarProduto-<?= $produto->id ?>" class="view" title="Visualizar" data-toggle="modal"><i class="material-icons">&#xE417;</i></a>
                        <a data-target="#editarProduto-<?= $produto->id ?>" class="edit" title="Editar" data-toggle="modal"><i class="material-icons">&#xE254;</i></a>
                          <input type="hidden" value="<?= $produto->id ?>" name="id">
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

        <!-- fim da tabela de produtos -->

      <!-- paginação -->
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link link-pagina" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Anterior</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link link-pagina" href="#">1</a></li>
          <li class="page-item"><a class="page-link link-pagina" href="#">2</a></li>
          <li class="page-item"><a class="page-link link-pagina" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link link-pagina" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Próxima</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- fim da paginação -->
    </main>

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>