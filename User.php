<?php

require_once 'Dbc.php';

class User extends Dbc
{
    // 親クラスのコンストラクタを実行
    public function __construct()
    {
        parent::__construct();
    }

    // create
    public function create($name, $email, $password)
    {
        $sql = "INSERT INTO users(name,email,password)
                VALUES(?,?,?)";

        $stmt = $this->prepare($sql);

        $stmt->execute([
            $name,
            $email,
            $password
        ]);
    }

    // read
    public function all()
    {
        $sql = "SELECT * FROM users";

        $stmt = $this->query($sql);

        return $stmt->fetchAll();
    }

    // find
    public function find($id)
    {
        $sql = "SELECT * FROM users WHERE id = ?";

        $stmt = $this->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    // update
    public function update($name, $email, $id)
    {
        $sql = "UPDATE users
                SET name = ?, email = ?
                WHERE id = ?";

        $stmt = $this->prepare($sql);

        $stmt->execute([
            $name,
            $email,
            $id
        ]);
    }

    // delete
    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = ?";

        $stmt = $this->prepare($sql);

        $stmt->execute([$id]);
    }
}
