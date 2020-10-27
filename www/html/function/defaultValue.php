<?php

ini_set("display_errors",1);
error_reporting(E_ALL);

function defaultValue($string = 'HONDA')
{
    echo $string . "です。";
}

defaultValue();
echo '<br>';

defaultValue('test');
?>