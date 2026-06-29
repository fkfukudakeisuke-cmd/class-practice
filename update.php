<?php

require_once 'Dbc.php';
require_once 'User.php';

try{
    $update_User = new User();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $update_User->update($id, $name, $email);

    header('Location: index.php');
    exit;

}
catch(PDOException $e)
{
    echo "エラー".$e->getMessage();
}

