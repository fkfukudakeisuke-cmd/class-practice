<?php


require_once 'Dbc.php';
require_once 'User.php';

$dbc = new Dbc();
$pdo = $dbc->db();

$delete_user = new User($pdo);


$id = $_POST['id'];

$delete_user->delete($id);


// リダイレクト
header('Location: index.php');
exit;
?>