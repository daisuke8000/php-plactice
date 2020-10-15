<?php

//input  なし
//output なし
function test()
{
    echo 'test';
}

test();

echo '<br />';

//input あり
//output なし

function getComment($string)
{
    echo $string;
}

getComment('comment');

//input なし
//output あり
echo '<br />';

function getNumberOfComment(){
    return 5;
}

//echo getNumberOfComment();
$commentNumber = getNumberOfComment();
echo $commentNumber;

echo '<br />';
// 引数２つ
// 戻り値あり

function sumPrice($int1, $int2){
    $int3 = $int1 + $int2;
    return $int3;
}

$totalPrice = sumPrice(2,5);
echo $totalPrice;