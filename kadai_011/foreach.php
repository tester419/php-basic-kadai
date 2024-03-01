<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
  </head>
  <body>
    <p>
      <?php
        // 連想配列onionに変数を代入する
        $onion = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // 連想配列onionの要素を順番に出力する
        foreach ($onion as $key => $value) {
          echo "{$key}:{$value}<br>";
        }
        
      ?>
    </p>
  </body>
</html>