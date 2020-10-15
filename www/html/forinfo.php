<?php

// foreach
// array
$members = [
    'daisuke' => [
        'height' => 166,
        'hobby' => 'BaseBall'
    ],
    'kenchan' => [
        'height' => 170,
        'hobby' => 'Soccer' 
    ]
];

// Value view
foreach($members as $member){
    echo $member;
    echo '<br />';
}

// key & Value
//multi array
foreach($members as $key => $member){
    foreach($member as $prop => $value){
        echo  $key. ' | ' . $prop . ' : ' . $value;
        echo '<br />'; 
    }
    echo '<br />';
}


//for => 繰り返し数が決まっている

for($i = 0; $i < 10; $i++){
    if($i === 5){
    //break;
    continue;
    }
    echo '<br />';
    echo $i;
}

//while => 繰り返し数がきまっていない

$j = 0;
while($j < 5){
    echo '<br />';
    echo $j;
    $j++;
}