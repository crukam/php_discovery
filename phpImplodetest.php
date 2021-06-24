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

function solutionTheOddOut($arrayInput) {
 $countedItems = array_count_values($arrayInput);
 $arrayFiltered = array_filter($countedItems,function($items) {return $items %2 == 1;});

 foreach ($arrayFiltered as $key => $value) {
     if($value % 2 != 0 ) return $key;
 }
 return null;
}
//$array_test = [];
//solutionTheOddOut($array_test);

function solMinMissingInteger($inputArray){
    
    $filteredArray = array_filter($inputArray, function($item) {
        return $item > 0;
    });

    if(!$filteredArray) {
        return 1;
    }
    
    $arrayUniqueValues = array_unique($filteredArray);
    
    sort($arrayUniqueValues);

    for ($i=1; $i <= COUNT($arrayUniqueValues) && $arrayUniqueValues[$i-1] == $i  ; $i++) 
    ;
    
   return $i;
}

function isPrime($a){
   if ($a < 2) return 0;
    for ($i=2; $i < (int) sqrt($a); $i++) if($a % $i ) return 0;

    return 1;
}

function frogJump($xCoordinate, $yCoordinate, $stepLength){
    return ceil(($yCoordinate - $xCoordinate)/ $stepLength);
}

function notInRange($inputArray) {
    
    sort($inputArray);
    
    for ($index = 0; $index < COUNT($inputArray); $index++) { 
        if(($inputArray[$index] - $index) > 1) return ++$index;
    }
    
     return ++$index ;
 
}

function tapeEquilibrium($inputArray) {
    $minSum = 1000000000000;
    $sumArray[0] = range(1,COUNT($inputArray)-1);
    $sumArray[1] = range(1,COUNT($inputArray)-1);
    $sumFront = 0;
    $sumBack = 0;
   
    for($i=1; $i< COUNT($inputArray); $i++){
        $sumArray[0][$i-1]= $sumFront + $inputArray[$i-1];
        $sumFront = $sumArray[0][$i-1];
        $sumArray[1][COUNT($inputArray)-($i+1)] = $sumBack + $inputArray[COUNT($inputArray) - $i];
        $sumBack = $sumArray[1][COUNT($inputArray)-($i+1)];
    }

    for($j=0; $j< (COUNT($inputArray)-1); ++$j){
        $diff=abs($sumArray[0][$j] - $sumArray[1][$j]);
        if($diff <  abs($minSum))  $minSum = $diff;
    }
    
    return ($minSum);
}
//print_r([3, 1, 2, 4, 3]); print(PHP_EOL);
print_r(tapeEquilibrium([3, 1, 2, 4, 3]));
//print_r(sqrt(84923).PHP_EOL);
//print_r($map);
//print_r(implode(',',range(1,1000)));