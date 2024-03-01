<?php
  // 型宣言と異なるデータ型の場合にエラーを発生させる
  declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
  </head>
  <body>
    <p>
      <?php

        // クラスFoodを定義する
        class Food {

          // プロパティを定義する
          private $name;
          private $price;

          // メソッドを定義する
          public function show_price() {
            // 値を出力する
            echo $this->price . "<br>";
          }

          // コンストラクタを定義する
          public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }

        }

        // クラスAnimalを定義する
        class Animal {

          // プロパティを定義する
          private $name;
          private $height;
          private $weight;

          // メソッドを定義する
          public function show_height() {
            // 値を出力する
            echo $this->height . "<br>";
          }

          // コンストラクタを定義する
          public function __construct(string $name, float $height, float $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
        }

        // インスタンス化する
        $food = new Food("potato", 250);
        $animal = new Animal("dog", 60, 5000);

        // インスタンスの各プロパティの値を出力する
        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br>";

        // インスタンスのメソッドを実行する
        $food->show_price();
        $animal->show_height();

      ?>
    </p>
  </body>
</html>