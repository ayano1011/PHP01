<?php
// var_dump($_POST);
// exit();

// データの受け取り
$answer = $_POST["answer"];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data = "{$answer}\n";

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/oogiri.txt', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

header("Location:oogiri.php");

?>