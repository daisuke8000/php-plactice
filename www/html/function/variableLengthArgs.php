<?php

//後ろの ”: string”の部分は戻り値の指定
function combine(string ...$name): string
{
    $combineName = '';
    for ($i = 0; $i < count($name); $i++) {
        $combineName .= $name[$i];
        if ($i != count($name) - 1) {
            $combineName .= '・';
        }
    }
    return $combineName;
}

$lName = '名前';
$fName = '苗字';
$name1 = combine($fName, $lName);

echo '結合結果: ' . $name1;
echo '<br>';

//original
function roop2(string ...$strings): string
{
    $moon = '';
    for ($x = 0; $x < count($strings); $x++) {
        $moon .= $strings[$x];
        if ($x != count($strings) - 1) {
            $moon .= '/';
        }
    }
    return $moon;
}




$variableLength = combine('test1', 'test2', 'test3');
echo $variableLength;

//original
echo '<br>';
$star = roop2('one', 'two', 'three', 'four', 'five');
echo $star;