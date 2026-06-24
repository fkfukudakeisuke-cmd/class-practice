<?php

require_once 'Dbc.php';
require_once 'User.php';

try {

    // DB接続
    $dbc = new Dbc();
    $pdo = $dbc->db();

    // Userクラス生成
    $user = new User($pdo);

    // フォームデータ取得
    $name = $_POST['name'];
    $email = $_POST['email'];

    // パスワードをハッシュ化
    $password = password_hash(
        $_POST['password'],
        PASSWORD_DEFAULT
    );

    // ユーザー登録
    $user->create(
        $name,
        $email,
        $password
    );

    // 一覧画面や入力画面へ戻る
    header('Location: index.php');
    exit;
} catch (PDOException $e) {

    echo 'エラー: ' . $e->getMessage();
}