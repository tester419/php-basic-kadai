<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>kadai_005</title>
  </head>
  <body>
    <p>
      <?php
        // 各変数に点数を代入する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 変数$total_valueに合計点を代入する
        $total_value = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

        // 平均点を出力する
        echo $total_value / 10;
      ?>
    </p>
  </body>
</html>