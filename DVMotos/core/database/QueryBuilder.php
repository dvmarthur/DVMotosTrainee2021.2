<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "SELECT * FROM {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parametros)
    {
        $sql = "insert into `{$table}` (nome, categoria, descricao, preco) 
                values (    '{$parametros['nome']}',
                            '{$parametros['categoria']}',
                            '{$parametros['descricao']}',
                            '{$parametros['preco']}')";
        
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit($table , $parametros)
    {
        $sql = "UPDATE {$table} SET ";

        //Adicionando os parametros
        foreach($parametros as $chave => $parametro)
        {
            $sql = $sql . "{$chave} = '{$parametro}', ";
        }

        //Tirando a ultima virgula
        $sql = rtrim($sql, " " . ",");

        //Adicionando o id
        $sql = $sql . " WHERE id = {$parametros['id']}";


        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function delete($table, $id)
    {
        $sql = "delete from {$table} where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function read()
    {
      
    }
}
