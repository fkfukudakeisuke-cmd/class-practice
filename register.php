<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>

  <div class="container mt-5">

    <h1>ユーザー登録</h1>

    <form action="create.php" method="POST">

      <div class="mb-3">
        <label class="form-label">名前</label>
        <input type="name" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">メールアドレス</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">パスワード</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">
        登録
      </button>

    </form>

  </div>

</body>

</html>