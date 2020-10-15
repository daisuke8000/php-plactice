<?php

// switch
// 内部的に "==" の処理になっている
// 厳密にやりたいときは "$data === 1;"みたいにしてあげる

$data = '1';

switch ($data) {
    case $data === 1:
        echo '1です';
        break;
    case 2:
        echo '2です';
        break;
    case 3:
        echo '3です';
        break;
    default:
        echo '1, 2, 3 ではありません';
}