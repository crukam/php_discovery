<?php
function solution($N) {
    // write your code in PHP7.0
    if($N < 0) return 0;
    $explodedBinary = explode ('1', decbin($N));
    $lenghtZeros = array_map(function($item){return strlen($item);},$explodedBinary);
    array_pop($lenghtZeros); 
    return max($lenghtZeros);
};

function solutionRotationCycle($arrayInput, $rotationIndex) {
    $arrayOutput = [];

    foreach($arrayInput as $index=>$input) {
        $arrayOutput[($index + $rotationIndex) % COUNT($arrayInput)] = $arrayInput[$index];
  
    }
    
    ksort($arrayOutput);

    return $arrayOutput;
}

