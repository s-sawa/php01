<?php
$file = file_get_contents('feed.json');
$json = json_decode($file);

// echo $json->items[1]->title;
foreach ($json->items as $item):
?>
・<?= $item->title; ?><br>
<?php
endforeach;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>