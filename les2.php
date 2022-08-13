<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db = new mysqli('localhost:3306','root','root','mydb');
    $db -> query('drop table if exists test');
    $db -> query('create table test(id INT)');
    //$db -> query('insert into test values(1)');
    echo 'dbに接続しました';
    ?>
</body>
</html>