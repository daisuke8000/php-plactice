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


?>