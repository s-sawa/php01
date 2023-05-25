<?php
function h($str)
{
    return htmlspecialchars(
        $str,
        ENT_QUOTES
    );
}
$name = $_POST["name"];
$sex = $_POST["sex"];
$protain = $_POST["protain"];
$taste = $_POST["taste"];
$smoothy = $_POST["smoothy"];
$solubility = $_POST["solubility"];
$price = $_POST["price"];
$repeat = $_POST["repeat"];
$c = ",";


mb_language("Japanese");
mb_internal_encoding("UTF-8");
$contents = $name . 'さんからアンケート回答がありました' . "\r\n"
    . '性別：' . $sex . "\r\n"
    . '好きなプロテイン：' . $protain;

$to = 's.s.hrmeee21@gmail.com';
$title = 'title';
$message = $contents;
// $message = $name . "さんからアンケート入力がありました";
$headers = "From: from@example.com";

if (mb_send_mail($to, $title, $message, $headers)) {
    echo "メール送信成功です";
} else {
    echo "メール送信失敗です";
}



//文字作成
$str = h($name) . $c . $sex . $c . $protain . $c . $taste . $c . $smoothy . $c . $solubility . $c . $price . $c . $repeat;

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