<?php
global $message;
$message = "I like php!\n";
global $var_exc ;
$var_exc = 2325866987979;
echo $GLOBALS['message'];
echo $GLOBALS['var_exc']."\n";

// sample 2

echo $_SERVER['PHP_SELF']."\n";