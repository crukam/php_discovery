<?php
$line = trim(fgets(STDIN));
$lineExploded = explode(' ', $line);
$lineSliced = array_slice($lineExploded,0,round(COUNT($lineExploded)/2));
print_r($lineExploded);
print_r($lineSliced);
print_r(array_sum($lineSliced));