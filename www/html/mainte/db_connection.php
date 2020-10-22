<?php

$dsn = 'mysql:host=db;dbname=udemy_php;';
// const DB_USER = 'php_user';
// const DB_PASSWORD = 'ds1216373';



//exception

try{
    $pdo = new PDO($dsn, 'root', 'secret');
    echo '接続成功';
    
} catch(PDOException $e){
    echo "Noconnec..." . $e->getMessage() . "\n";
    exit();
}

?>