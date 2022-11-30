<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>（入力画面）</title>
  <link rel="stylesheet" href="input.css"/>
</head>

<body>
  <div class="container">
  <form action="oogiri_create.php" method="POST" >
    <header><img src="oogiri_image/pink-header.png"></header>
    <h2>お題はこちら</h2>
    <fieldset>
      <legend class="sample">第一問</legend>
      <div class="odai">
        <p>戦国時代のヤンキーあるあるを教えてください。</p>
      </div>
      <div class="submit-area">
      <div>
      回答: <input type="text" name="answer" size="30">
      </div>
      <div>
        <input type="submit" value="送信">
      </div>
      </div>
      <a href="oogiri_read.php">回答一覧</a>
    </fieldset>
  </form>
</div>
</body>

</html>