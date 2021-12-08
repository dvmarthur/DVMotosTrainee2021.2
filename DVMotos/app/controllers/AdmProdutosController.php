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

    public function create()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'categoria' => $_POST['categoria']
        ];

        App::get('database') -> insert('produtos', $parametros);
        header('Location: /adm-produtos');
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
        App::get('database')->delete('produtos', $_POST['id']);
        header('Location: /adm-produtos');
    }
}