<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8章課題</title>
</head>
<body>
    <p>
        <?php
        $goods = ['名前'=>'玉ねぎ' , '値段'=>200 , '産地'=>'北海道'];

        foreach($goods as $key => $value){
            echo "{$key}:{$value} <br>";
        }
        ?>
    </p>
</body>
</html>