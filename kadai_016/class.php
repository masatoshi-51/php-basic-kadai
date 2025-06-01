<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php

      class Food {
            private $name;
            private $price;

            // コンストラクタ
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            
            // メゾット定義
            public function show_price(){
                echo $this->price;
            }
        }

        $potato = new Food('potato',250);
        print_r($potato);
        echo '<br>';


      class Animal {
            private $name;
            private $height;
            private $weight;

            // コンストラクタ
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            
            // メゾット定義
            public function show_height(){
               echo $this->height ;
            }
        }

        $dog = new Animal('dog',60,5000);
        print_r($dog);
        echo '<br>';

        $potato-> show_price();
        echo '<br>';
        $dog-> show_height();
        ?>
    </p>
</body>
</html>