</html>
 <head>
   <meta charset="UTF-8">
   <title>ファイル受信ページ1</title>
 </head>
 <body>
   <p><?php if( $up_ok ){ ?>
     アップロードされたファイルは <img src="<?= $up_file ?>"> です。
   <?php }else{ ?>
     アップロードは失敗しました。
   <?php } ?></p>
   <a href="upload.php">アップロードページへ戻る</a>
 </body>
</html>