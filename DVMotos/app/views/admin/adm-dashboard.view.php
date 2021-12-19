<!DOCTYPE html>

<html>
    <head>
        <title>Dashboard Administrativa | DVMotos Store</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../public/css/admCategoria.css">

        <link rel="shortcut icon" href="../../../public/assets/favicon-circulo2.png">

    </head>

    <body>

    <?php require 'verificarLogin.php' ?>

    <?php require('adm-navbar.view.php'); ?>

        <div class="logout">
            <a href="/login/deslogar">
                <img class="sair" src="../../../public/img/logout.png" alt="Imagem de logout/sair">
            </a>
        </div>

            <div class="miniatura">

            <div class="cartao" style="width: 18rem;">
                <a href="/adm-produtos">
                    <img class="card-img-top" src="../../../public/img/renovador.png" alt="Imagem de uma moto com um produto">
                </a>
                <div class="card-body">
                <p class="card-text">Produtos</p>
                </div>
            </div>

            <div class="cartao" style="width: 18rem;">
                <a href="/adm-categorias">
                    <img class="card-img-top" src="../../../public/img/categoria.png" alt="Imagem de vários modelos de moto">
                </a>
                <div class="card-body">
                <p class="card-text">Categorias</p>
                </div>
            </div>

            <div class="cartao" style="width: 18rem;">
                <a href="/adm-user">
                    <img class="card-img-top" src="../../../public/img/usuario.png" alt="Imagem de vários usuários">
                </a>
                <div class="card-body">
                <p class="card-text">Usuários</p>
                </div>
            </div>

            </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>