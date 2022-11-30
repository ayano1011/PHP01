
<?php

$str = "";

// ファイルを開く（読み取り専用）
$file = fopen('data/oogiri.txt', 'r');
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行ずつ取得→$lineに格納
if ($file) {
  while ($line = fgets($file)) {
    // 取得したデータを`$str`に追加する
    $str .="<p>……{$line}<p> ";
  }
  $split = explode(" ", $str);

//   print_r($split);
// echo count($split);
}

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>回答一覧(第一問)</title>
     <link rel="stylesheet" href="read.css" />

</head>

<body>

  <div class="container">
        <header><img src="oogiri_image/pink-header.png"></header>

    <div>回答一覧</div>
    <a href="oogiri.php">入力画面に戻る</a>
    
     
  
         <div>一覧</div>
        
 <div class="answers-area">  <div class="answers-text">戦国時代のヤンキーあるあるを教えてください
 <strong><?=$split[count($split)-2]?></strong></div>
 </div>  
 <div class="answers-area">  <div class="answers-text">戦国時代のヤンキーあるあるを教えてください
 <strong><?=$split[count($split)-3]?></strong></div>
 </div>  
 <div class="answers-area">  <div class="answers-text">戦国時代のヤンキーあるあるを教えてください
 <strong><?=$split[count($split)-4]?></strong></div>
 </div>  
 <div class="answers-area">  <div class="answers-text">戦国時代のヤンキーあるあるを教えてください
 <strong><?=$split[count($split)-5]?></strong></div>
 </div>  
</div>
</body>

</html>