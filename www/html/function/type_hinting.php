<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

echo 'type hinting test..' . "<br>";
/**
 *  @param $string
 */

 function noTypeHint($string)
 {
     var_dump($string);
 }

 noTypeHint(['test']);
 echo '<br>';

// 引数にstringを指定。そのため以下は配列でエラーになる。
function typeTest(string $string)
// function typeTest(array $string)
 {
     var_dump($string);
 }

// typeTest(['配列文字']);

?>