<?php

$height = '171';

// "==" ⇢　相互補完して同等か判断
// "===" ⇢　型の一致までみる

var_dump($height);

// rei_1
if ($height == 175) {
    echo "<br />";
    echo '身長は' . $height . 'cmです！';
}

// rei2
if ($height === 175) {
    echo "<br />";
    echo '身長は' . $height . 'cmです！';
}else{
    echo "<br />";
    echo '身長は' . $height . 'cmではありません！';
}

$signal = 'blue';

if ($signal === 'red') {
    echo "<br />";
    echo "Stop!";
} else if ($signal === 'yellow') {
    echo "<br />";
    echo "Cation!";
} else {
    echo "<br />";
    echo "Go!";
}

echo "<br />";

if ($height >= 171) {
    echo $height . "以上です";
}

if ($height <= 170) {
    echo $height . "以下です";
}

echo "<br />";

if ($height !== 170) {
    echo "170ではありません";
}

$data = '';

echo "<br />";

if (empty($data)){
    echo '変数は空です';
}

echo "<br />";

if (!empty($data)){
    echo '変数は空ではありません';
}

$signal_1 = 'red';
$signal_2 = 'yellow';

if ($signal_1 === 'red' && $signal_2 === 'yellow'){
    echo "ANDのif文";
}

echo "<br />";

if ($signal_1 === 'red' || $signal_2 === 'blue'){
    echo "ORのif文";
}

echo "<br />";

echo $signal_1 === 'red' ? "true":"false";

$signal_3 = '';

echo "<br />";

if ($signal_3 == true){
    echo 'true';
}else{
    echo 'false';
}

?>