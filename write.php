<?php
$name = $_POST["name"];
$sex = $_POST["sex"];
$protain = $_POST["protain"];
$taste = $_POST["taste"];
$smoothy = $_POST["smoothy"];
$solubility = $_POST["solubility"];
$price = $_POST["price"];
$repeat = $_POST["repeat"];
$c = ",";

//文字作成
$str = $name . $c . $sex . $c . $protain . $c . $taste . $c . $smoothy . $c . $solubility . $c . $price . $c . $repeat;
//区切りなのでexplodeで配列にして使うことができる
// $ar = explode(",", $str);
// var_dump(($ar));


//File書き込み
$file = fopen("data/data.txt", "a");    // ファイル読み込み
fwrite($file, $str . "\n"); // . で接続
//ファイルを１行ずつ出力
fclose($file);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
</head>

<body>
    <h1>書き込みしました！！！</h1>
    <a href="read.php">結果を見る</a>
</body>

</html>