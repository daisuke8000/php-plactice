<?php

// string
//$str = 'abc'
//echo strlen($str);

//mutli-byte string
$str = 'あいうえお';
echo mb_strlen($str);
echo '<br />';

//string replace
echo str_replace('うえお','UEO',$str);

echo '<br />';
$str_2 = '特定の箇所で、分割します';
echo explode('、', $str_2)[0];
echo '<br />';
echo explode('、', $str_2)[1];

echo '<br />';
$str_3 = ['どうも', 'みなさん', 'おはようございます'];
echo implode('~', $str_3);

//正規表現
$str_4 = '特定の文字列が含まれている確認する';
echo '<br />';
echo preg_match('/文字列/',$str_4);

//指定文字列から文字列を取得する
echo '<br />';
echo substr('abcdefg',4);
echo '<br />';
echo mb_substr('こんばんわ',2);
echo '<br />';

//array add array

$array = ['いちご','りんご'];
echo array_push($array, 'ぶどう', 'パイナップル');
echo '<pre>';
var_dump($array);
echo '</pre>';

$postalCode = '123-4567';

function checkPostalCode($str){
    $replase = str_replace('-', '',$str);
    $length = strlen($replase);
    echo '<br />';
    echo $replase;
    echo '<br />';
    echo $length;
    echo '<br />';

    if ($length === 7) {
        return true;
    }
    return false;

};

var_dump(checkPostalCode($postalCode));

$globalVariable = 'global';

function checkScope(){
    $localVariable = 'local';
    echo $localVariable;
}

echo '<br />';
echo $globalVariable;
echo '<br />';
checkScope();
//echo $localVariable;

?>