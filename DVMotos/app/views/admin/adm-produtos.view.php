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
              <tr>
                <td>2021 Heritage Classic Harley-Davidson</td>
                <td>Motocicleta</td>
                <td>
                  <a data-target="#visualizarProduto" class="view" title="Visualizar" data-toggle="modal"><i class="material-icons">&#xE417;</i></a>
                  <a data-target="#editarProduto" class="edit" title="Editar" data-toggle="modal"><i class="material-icons">&#xE254;</i></a>
                  <a href="#" class="delete" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
              </tr>
              <tr>
                <td>2021 Heritage Classic Harley-Davidson</td>
                <td>Motocicleta</td>
                <td>
                  <a data-target="#visualizarProduto" class="view" title="Visualizar" data-toggle="modal"><i class="material-icons">&#xE417;</i></a>
                  <a data-target="#editarProduto" class="edit" title="Editar" data-toggle="modal"><i class="material-icons">&#xE254;</i></a>
                  <a href="#" class="delete" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>

      <!-- fim da tabela de produtos -->

    <!-- paginação -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Anterior</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Próxima</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- fim da paginação -->


  <!-- Modal -->

    <!-- Modal Visualizar -->
    <div class="modal fade" id="visualizarProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">2021 Heritage Classic Harley-Davidson</h5>
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
                    <p>R$75.000,00</p>
                  </div>
                  <div class="col-sm-6">
                    <h3>Categoria: </h3>
                    <p>Motocicleta</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <h3>Descrição: </h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <p>A cruiser americana por excelência. Detalhes vintage impressionantes e estilo rock and roll puro. O estilo escurecido, o toque moderno e a pilotagem revigorada do modelo Heritage leva a nostalgia a um novo patamar.</p>
                  </div>
                </div>              
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-amarelo" data-dismiss="modal" data-toggle="modal" data-target="#editarProduto">Editar</button>
            <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Editar -->
    <div class="modal fade" id="editarProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input class="form-control" type="text" placeholder="Nome">
              <br>
              <input class="form-control" type="text" placeholder="Descrição">
              <br>
              <input class="form-control" type="text" placeholder="Preço">
              <br>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Motocicleta</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <br>
              <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1"><h5>Imagem</h5></label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </form>
            </div>
            <!--Fim Form Modal Editar-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning btn-amarelo">Salvar mudanças</button>
          <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
        </div>
        </div>
      </div>
    </div>

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
        <div class="modal-body">
            <!--Form Modal Adicionar-->
            <div class = "formularioAdicionar">
              <input class="form-control" type="text" placeholder="Nome">
              <br>
              <input class="form-control" type="text" placeholder="Descrição">
              <br>
              <input class="form-control" type="text" placeholder="Preço">
              <br>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Motocicleta</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <br>
              <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1"><h5>Imagem</h5></label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </form>
            </div>
            <!--Fim Form Modal Adicionar-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning btn-amarelo">Salvar mudanças</button>
          <button type="button" class="btn btn-warning btn-preto" data-dismiss="modal">Fechar</button>
        </div>
        </div>
      </div>
    </div>
    <!-- fim modal -->

    <!-- footer -->

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>