<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
    <style>
        img {
            width: 500px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <h1>アンケート</h1>
            <form action="write.php" method="post">
                <p>名前: <input type="text" name="name">
                    <select name="sex">
                        <option value="">性別</option>
                        <option value="男性">男性</option>
                        <option value="女性">女性</option>
                    </select>
                </p>
                <p>好きなプロテイン<br>
                    <select name="protain" id="test">
                        <option value="">選択してください</option>
                        <option value="チョコ">チョコ</option>
                        <option value="バナナ">バナナ</option>
                        <option value="ベリー">ベリー</option>
                        <option value="ピーチ">ピーチ</option>
                        <option value="ヨーグルト">ヨーグルト</option>
                    </select>
                </p>
                <p>味:(1:マズイ 5:オイシイ)<br>
                    <input type="radio" name="taste" value="1">1
                    <input type="radio" name="taste" value="2">2
                    <input type="radio" name="taste" value="3">3
                    <input type="radio" name="taste" value="4">4
                    <input type="radio" name="taste" value="5">5
                </p>
                <p>飲みやすさ:(1:飲みにくい 5:飲みやすい)<br>
                    <input type="radio" name="smoothy" value="1">1
                    <input type="radio" name="smoothy" value="2">2
                    <input type="radio" name="smoothy" value="3">3
                    <input type="radio" name="smoothy" value="4">4
                    <input type="radio" name="smoothy" value="5">5
                </p>
                <p>水への溶けやすさ:(1:溶けにくい 5:溶けやすい)<br>
                    <input type="radio" name="solubility" value="1">1
                    <input type="radio" name="solubility" value="2">2
                    <input type="radio" name="solubility" value="3">3
                    <input type="radio" name="solubility" value="4">4
                    <input type="radio" name="solubility" value="5">5
                </p>
                <p>価格:(1:高い 5:安い)<br>
                    <input type="radio" name="price" value="1">1
                    <input type="radio" name="price" value="2">2
                    <input type="radio" name="price" value="3">3
                    <input type="radio" name="price" value="4">4
                    <input type="radio" name="price" value="5">5
                </p>
                <p>また買いたいか:(1:もう買わない 5:リピート決定)<br>
                    <input type="radio" name="repeat" value="1">1
                    <input type="radio" name="repeat" value="2">2
                    <input type="radio" name="repeat" value="3">3
                    <input type="radio" name="repeat" value="4">4
                    <input type="radio" name="repeat" value="5">5
                </p>
                <input type="submit" value="送信">
            </form>
            <ul>
                <a href="read.php">アンケート結果</a>
            </ul>

        </div>
    </div>
</body>

</html>