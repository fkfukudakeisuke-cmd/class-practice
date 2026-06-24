<?php

require_once 'Dbc.php';
require_once 'User.php';


$dbc = new Dbc();
$pdo = $dbc->db();

$user= new User($pdo);
$users= $user->all();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">

        <h1>ユーザー一覧</h1>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>編集</th>
                    <th>削除</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($users as $user): ?>


                <tr>

                    <td> <?= $user['id'] ?></td>
                    <td> <?= $user['name'] ?></td>
                    <td> <?= $user['email'] ?></td>

                    <td>
                        <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-success">
                            編集
                        </a>


                    </td>
                    <td>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('削除しますか？')">
                                削除
                            </button>
                        </form>

                    </td>
                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</body>

</html>