<?php
 echo 'json'; 
 require('seiucchan.json');
 echo 'mysql';
 try {


    $pdo = new PDO(
        'mysql:dbname=dbname;host=localhost;charset=utf8',
        'root',
        'password'
    );


} catch (PDOException $e) {
    echo "aaaaaaa";
    exit($e->getMessage()); 

}

$stmt = $pdo->prepare('SELECT * FROM seiucchan');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Example</title>
    </head>
    <body>
        <!-- ここではHTMLを書く以外のことは一切しない -->
    </body>
</html>
