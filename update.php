<?php

require_once 'Dbc.php';
require_once 'User.php';

$dbc = new Dbc();
$pdo = $dbc->db();

$update_User = new User($pdo);

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$update_User->update($name, $email, $id);

header('Location: index.php');
exit;