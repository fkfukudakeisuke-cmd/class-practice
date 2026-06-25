<?php

class Dbc
{
    protected $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'program';
        $user = 'root';
        $password = '';

        $this->pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8",
            $user,
            $password
        );

        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }
    //prepareメソッドを追加
    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }
    
    public function query($sql)
    {
        return $this->pdo->query($sql);
    }
}
