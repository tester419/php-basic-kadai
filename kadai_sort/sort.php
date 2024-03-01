<?php
  // 型宣言と異なるデータ型の場合にエラーを発生させる
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>kadai_sort</title>
  </head>
  <body>
    <p>
      <?php

        // 配列$numsに値を代入する
        $nums = [15, 4, 18, 23, 10];

        // 関数sort_2wayを定義する
        function sort_2way ($array, bool $order) {

          // 引数$orderがTRUEであれば昇順、それ以外であれば降順で要素を並べる
          if ($order === TRUE) {
            // メッセージを表示する
            echo "昇順にソートします。<br>";
            
            // 引数$arrayを昇順にソートする
            sort($array);
          } else {
            // メッセージを表示する
            echo "降順にソートします。<br>";

            // 引数$arrayを降順にソートする
            rsort($array);
          }

          // ソートした引数$arrayを１行ずつ表示する
          foreach ($array as $value) {
            echo $value . "<br>";
          }
        }

        // 関数sort_2wayを呼び出す
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);

      ?>
    </p>
  </body>
</html>