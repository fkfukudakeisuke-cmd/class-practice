<?php


class User {
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    //create
    public function create($name,$email,$password)
    {
        $sql = "INSERT INTO users(name,email,password) VALUES(?,?,?)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            $name,
            $email,
            $password
        ]);
    }
    //read
    public function all()
    {
        $sql = "SELECT * FROM users";

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
    //編集画面のメソッド
    public function find($id) 
    {
        $sql = "SELECT * FROM users WHERE id = ?";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    //update
    public function update($name,$email,$id)
    {
        //SQLを実施
        $sql = "UPDATE users SET name = ?, email = ? WHERE id = ? ";

        $stmt = $this->pdo->prepare($sql);

        //実行
        $stmt->execute([$name, $email, $id]);
    }

    //delete
    public function delete($id)  
    {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        
        //実行
        $stmt->execute([$id]);
    }
}