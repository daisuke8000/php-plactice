<?php

require 'db_connection.php';

//User入力なしパターン　=> query
//同じ表示など
$sql = 'select * from contacts where id = 1';
$stmt = $pdo->query($sql);
$result = $stmt->fetchall();

echo "<pre>";
var_dump($result);
echo "</pre>";

//User入力ありパターン => prepare, bind, execute
//検索フォームなど
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダー
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 4, PDO::PARAM_INT); //紐付け
$stmt->execute(); //実行
$result = $stmt->fetchall();

echo "<pre>";
var_dump($result);
echo "</pre>";

$pdo->beginTransaction();
//トランザクション
try{
    
    $stmt = $pdo->prepare($sql); //プリペアードステートメント
    $stmt->bindValue('id', 4, PDO::PARAM_INT); //紐付け
    $stmt->execute(); //実行
    $pdo->commit();
    
}catch(PDOException $e){
    //　更新のキャンセル
    $pdo->rollback();
    
}