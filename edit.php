<?php

require_once 'Dbc.php';
require_once 'User.php';

$user = new User();

$id = $_GET['id'];
$edituser = $user->find($id);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー編集</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">

        <h1>ユーザー編集</h1>

        <form action="update.php" method="POST">

            <!-- 更新対象のIDを隠して送る -->
            <input type="hidden" name="id" value="<?= $edituser['id'] ?>">

            <div class="mb-3">
                <label class="form-label">名前</label>
                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($edituser['name']) ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">メールアドレス</label>
                <input type="email" name="email" class="form-control"
                    value="<?= htmlspecialchars($edituser['email']) ?>">
            </div>

            <button type="submit" class="btn btn-primary">
                更新
            </button>

        </form>

    </div>

</body>

</html>