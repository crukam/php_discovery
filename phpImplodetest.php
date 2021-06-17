<?php
$result = 0;
$inbinary = decbin(7);
$explodedBinary = explode ('1', $inbinary);

print_r($inbinary); print_r(' ');
//print_r($explodedBinary ); print_r(' ');
//print_r($lenghtZeros ); print_r(' ');
$lenghtZeros = array_map(function($item){return strlen($item);},$explodedBinary); ;
array_pop($lenghtZeros); 
print_r(max($lenghtZeros) ); print_r(' ');
die();


return $result;


