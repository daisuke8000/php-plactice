<?php

$int = 21;
$str = "test";
$var = $str . $int;

echo "変数の結合 : " . $var;
echo "<br />";

var_dump($var);
echo "<br />";

const MAX = 10;
echo "定数 : " . MAX;
echo "<br />";

$array = [1,2,3];
echo $array[1];
echo "<br />";

$array2 = [
    ["red", "blue", "yellow"],
    ["black", "white", "gray"]
];

echo "<pre>";
var_dump($array);
echo "</pre>";

echo "<pre>";
var_dump($array2);
echo "</pre>";

echo $array2[0][0];
echo "<br />";

$array_member = [
    'name' => 'Sasaki',
    'age' => 32,
    'hobby' => 'Programing'
];

echo $array_member['name'];
echo "<br />";

echo "<pre>";
echo var_dump($array_member);
echo "</pre>";

$array_member2 = [
    '本田' => [
        'age' => 35,
        'hobby' => 'Soccer'
    ],
    '香川' => [
        'age' => 34,
        'hobby' => 'BaseBall'
    ],
];

echo $array_member2['本田']['hobby'];

echo "<pre>";
echo var_dump($array_member2);
echo "</pre>";

$array_member3 = [
    'class1' => [
        'sasaki' => [
            'height' => 165,
            'weight' => 75,
            'name' => 'daisuke'
        ],
        'satou' => [
            'height' => 188,
            'weight' => 120,
            'name' => 'bull'
        ]
    ],
    'class2' => [
        'iida' => [
            'height' => 155,
            'weight' => 55,
            'name' => 'hitomi'
        ],
        'yoshino' => [
            'height' => 175,
            'weight' => 88,
            'name' => 'geba'
        ]
    ],
];

echo $array_member3['class1']['sasaki']['name'];
echo "<br />";

echo "<pre>";
echo var_dump($array_member3);
echo "</pre>";

?>