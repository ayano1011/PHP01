<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>写真アップロード（入力画面）</title>
</head>

<body>
  <form action="image_create.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>写真を選んでください</legend>
      <a href="oogiri_read.php">一覧画面</a>
      <div>
      image: <input type="file" name="up">
      </div>
      <div>
        <input type="submit" value="送信">
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>