<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutosController
{
    public function produtos()
    {   
        $produtos = App::get('database') -> selectAll('produtos');

        $tables = [
            'produtos' => $produtos
        ];
        return view('/site/produtos', $tables);
    }

    public function pesquisa()
    {
        $pesquisa = $_GET['pesquisa'];
        $produtos = App::get('database') -> pesquisa('produtos', $pesquisa);
        $tables = [
            'produtos' => $produtos
        ];
        return view('/site/produtos', $tables);
    }

    public function paginacao()
    {
        $qtd_produtos = 9;
        $pagina = $_GET['pagina']?? 1;

        $inicio = $pagina - 1;
        $inicio *= $qtd_produtos;
        $qtdProdutosAtualizada = $pagina * $qtd_produtos;
        
        $limite = $inicio . "," . $qtd_produtos;

        $produtos = App::get('database') -> selectAll('produtos');
        $qtd_total = count($produtos);
        $total_paginas = $qtd_total / $qtd_produtos;

        $produtos_paginacao = App::get('database') -> paginacao($limite);

        $tables = [
            'produtos' => $produtos,
            'total_paginas' => $total_paginas,
            'qtd_produtos' => $qtd_produtos,
            'qtd_total' => $qtd_total,
            'inicio' => $inicio,
            'produtos_paginacao' => $produtos_paginacao,
            'pagina' => $pagina
        ];

        return view('/site/produtos', $tables);
    }
    
    public function show()
    {
        
    }

    public function create()
    {
 
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
 
    }
}