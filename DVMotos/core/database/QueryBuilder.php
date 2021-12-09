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
        $sql = "select * from {$table}";

        try { 
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } 
        
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select()
    {

    }

    public function insert($table, $parametros)
    {
        $sql = "insert into `{$table}` (nome) values ('{$parametros['nome']}')";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } 
        
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit($table, $id)
    {
        $sql = "edit from {$table} where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } 
        
        catch (Exception $e) {
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
        } 
        
        catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function read()
    {
      
    }
}
