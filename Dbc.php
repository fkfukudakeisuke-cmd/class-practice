<?php
// Dbc.php

class Dbc
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(
            "mysql:host=localhost;dbname=program;charset=utf8",
            'root',
            '',
            [PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]
        );
    }

    protected function selectAll($sql,$params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function selectOne($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    protected function execute($sql,$params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }
}
