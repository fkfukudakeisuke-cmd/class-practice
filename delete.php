<?php


require_once 'Dbc.php';
require_once 'User.php';

try{
    
    $delete_user =  new User();
    $id = $_POST['id'];

    $delete_user->delete($id);


    // リダイレクト
    header('Location: index.php');
    exit;



} catch(PDOException $e)
{
    echo "エラー".$e->getMessage();
}



?>