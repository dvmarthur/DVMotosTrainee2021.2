<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmProdutosController
{
    public function admProdutos()
    {
        $produtos = App::get('database') -> selectAll('produtos');

        $tables = [
            'produtos' => $produtos
        ];
        return view('/admin/adm-produtos', $tables);
    }
    
    public function show()
    {
        
    }

    public function createProduto()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'imagem' => $_POST['imagem'],
            'categoria' => $_POST['categoria']
        ];

        App::get('database') -> insert('produtos', $parametros);
        header('Location: /adm-produtos');
    }

    public function pesquisa()
    {
        $pesquisa = $_GET['pesquisa'];
        $produtos = App::get('database') -> pesquisa('produtos', $pesquisa);
        $tables = [
            'produtos' => $produtos
        ];
        return view('/site/adm-produtos', $tables);
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function updateProduto()
    {   
        $parametros = [
            'id' => $_POST['id'],
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'imagem' => $_POST['imagem'],
            'categoria' => $_POST['categoria']
        ];
        
        App::get('database')->edit('produtos', $parametros);
        header('Location: /adm-produtos');
    }

    public function delete()
    {
        App::get('database')->delete('produtos', $_POST['id']);
        header('Location: /adm-produtos');
    }

    public function getImagem()
    {
        
        Header( "Content-type: image/gif");
    }
}