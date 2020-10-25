<?php
//dockerの場合、hostはdbを指定
const DB_HOST = 'mysql:host=db;dbname=udemy_php;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'ds1216373';

try{
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    echo "認証成功";
} catch(PDOException $e){
    echo "認証失敗" . $e->getMessage() . "\n";
    exit();
}

?>