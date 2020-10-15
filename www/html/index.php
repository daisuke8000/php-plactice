<?php

require 'common.php';
require './test/testcommon.php';

echo $commonVariable;
commonTest();

echo '<br />';
echo $testCommon;
outDirTestCommon();

echo '<br />';
echo __DIR__;
echo '<br />';
echo __FILE__;

?>