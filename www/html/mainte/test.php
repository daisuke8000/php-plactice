<?php

$contactFile = '.contact.dat';

$fileContents = file_get_contents($contactFile);

// echo $fileContents;

// //上書き
// //file_put_contents($contactFile, 'is Test...');
// //

// $addtext = 'is NEXT TEST' . "\n";
// file_put_contents($contactFile, $addtext, FILE_APPEND);

// // 配列 file 区切る explode
// $allData = file($contactFile);
// foreach($allData as $lineData){
//     $lines = explode(',', $lineData);
//     echo $lines[0] . '<br>';
//     echo $lines[1] . '<br>';
//     echo $lines[2] . '<br>';
// }

$addText = '更に追記してみる' . "\n";

$contents = fopen($contactFile, 'a+');

fwrite($contents, $addText);
fclose($contents);

?>