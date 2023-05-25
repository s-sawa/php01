<?php
// ファイルを変数に格納
$filename = "data/data.txt";
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
$arrData = [];
if ($fp) {
    while ($txt = fgets($fp)) {
        //１行ずつ取り出し$arrData配列に格納。
        $arrData[] = $txt;
    }
}
//テスト 外側のforは行数　
//配列から1個取り出し;
$length = count($arrData);
//テーブル作成
echo '<table border="1">';
echo "<tr>";
echo '<td>名前</td>';
echo '<td>性別</td>';
echo '<td>種類</td>';
echo '<td>味</td>';
echo '<td>飲みやすさ</td>';
echo '<td>溶けやすさ</td>';
echo '<td>価格</td>';
echo '<td>また買うか</td>';
echo "</tr>";
$choco = 0;
$banana = 0;
$berry = 0;
$peach = 0;
$yogurt = 0;
for ($i = 0; $i < $length; $i++) {
    echo "<tr>";
    $data = explode(",", $arrData[$i]);
    for ($j = 0; $j < 8; $j++) {
        echo "<td>";
        echo $data[$j];
        echo "</td>";
    }
    if ($data[2] == "チョコ") {
        $choco++;
    } else if ($data[2] == "バナナ") {
        $banana++;
    } else if ($data[2] == "ベリー") {
        $berry++;
    } else if ($data[2] == "ピーチ") {
        $peach++;
    } else if ($data[2] == "ヨーグルト") {
        $yogurt++;
    }
    echo "</tr>";
}
echo "</table>";
fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.js"></script>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
            /* width:60%; */
        }

        td {
            width: 120px;
        }
    </style>
</head>

<body>
    <div>チョコ<span><?= $choco ?></span></div>
    <div>バナナ<span><?= $banana ?></span></div>
    <div>ベリー<span><?= $berry ?></span></div>
    <div>ピーチ<span><?= $peach ?></span></div>
    <div>ヨーグルト<span><?= $yogurt ?></span></div>
    <canvas id="barChart" width="500" height="500"></canvas>

    <div><a href="post.php">戻る</a></div>
    <!-- グラフの描画する場所 -->
    <!-- <canvas id="myChart" width="500" height="500"></canvas> -->

    <script>
        var ctx = document.getElementById("barChart");
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["チョコ", "バナナ", "ベリー", "ピーチ", "ヨーグルト"],
                datasets: [{
                    label: "プロテインアンケート",
                    data: [<?= $choco ?>, <?= $banana ?>, <?= $berry ?>, <?= $peach ?>, <?= $yogurt ?>],
                    backgroundColor: "rgba(67, 133, 215, 0.5)", //グラフ背景色
                    borderColor: "rgba(67, 133, 215, 1)", //グラフボーダー色
                }]
            },
            options: {
                responsive: false,
                title: {
                    display: true,
                    fontSize: 18,
                    fontFamily: "sans-serif",
                    text: 'タイトル',
                },
                scales: {
                    r: {
                        max: 5, //グラフの最大値
                        min: 0, //グラフの最小値
                        ticks: {
                            stepSize: 1 //目盛間隔
                        }
                    }
                },
            }
        });
    </script>
</body>

</html>