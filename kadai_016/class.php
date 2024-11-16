<?php
// Foodクラス
class Food {
    public $name;
    public $price;

    // コンストラクタで引数を受け取ってプロパティを初期化
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // priceプロパティを出力するメソッド
    public function show_price() {
        echo $this->price . "<br>";
    }
}

// Foodクラスのインスタンスを作成（引数を渡して初期化）
$food = new Food("potato", 250);
$food->show_price();

// Animalクラス
class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタで引数を受け取ってプロパティを初期化
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティを出力するメソッド
    public function show_height() {
        echo $this->height;
    }
}

// Animalクラスのインスタンスを作成（引数を渡して初期化）
$animal = new Animal("dog", 60, 5000);
$animal->show_height();

// インスタンスの詳細を出力（print_rを使って表示）
echo "<pre>";
print_r($food);
echo "</pre>";

echo "<pre>";
print_r($animal);
echo "</pre>";
?>
