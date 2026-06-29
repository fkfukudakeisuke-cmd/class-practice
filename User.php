<?php
// User.php — usersテーブルのCRUDだけ

require_once 'Dbc.php';

class User extends Dbc
{
    public function create($name,$email,$password)
    {
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        return $this->execute(
            $sql,
            [$name, $email, $password]
        );
    }

    public function all()

    {
        $sql = "SELECT * FROM users";
        return $this->selectAll($sql);
    }

    public function find(int $id)
    
    {
        $sql = "SELECT * FROM users WHERE id = ?";
        return $this->selectOne( $sql,[$id]);
    }

    public function update($id,$name,$email)
    {
        $sql =  "UPDATE users SET name = ?, email = ? WHERE id = ?";
        return $this->execute(
           $sql,
            [$name, $email, $id]
        );
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        return $this->execute($sql, [$id]);
    }
}
