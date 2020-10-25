<?php

function insertContact($data){
require 'db_connection.php';

ini_set("display_errors", 1);
error_reporting(E_ALL);

$params = [
    'id' => null,
    'your_name' => $data['your_name'],
    'email' => $data['email'],
    'url' => $data['url'],
    'gender' => $data['gender'],
    'age' => $data['age'],
    'contact' => $data['contact'],
    'created_at' => null
];

$count = 0;
$columns = '';
$values = '';

foreach(array_keys($params) as $key){
    if($count++>0){
        $columns .= ',';
        $values .= ',';
    }
    $columns .= $key;
    $values .= ':'.$key;
}

$sql = 'insert into contacts('. $columns . ')values('. $values .')'; //名前付きプレースホルダー

// var_dump($sql);
// exit;

$stmt = $pdo->prepare($sql); //プリペアードステートメント
// $stmt->bindValue('id', 5, PDO::PARAM_INT); //紐付け
$stmt->execute($params); //実行

};

?>