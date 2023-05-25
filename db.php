<?php

$dsn = 'mysql:dbname=gs_db;host=localhost';
$user = 'sawa';
$password = 'hYIwoBRpE7g4e8vo';

try{
    $dbh = new PDO($dsn, $user, $password);

    $sql = 'select * from gs_an_table';
    foreach ($dbh->query($sql) as $row) {
        print($row['id'].',');
        print($row['name']);
        print('<br>');
    }
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

$dbh = null;
