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
    return array_values(array_filter(range(1, (COUNT($inputArray)+1)), function ($item) use ($inputArray) {
        return !in_array($item, $inputArray);
    }))[0];
}

//print_r(sqrt(84923).PHP_EOL);
print_r(notInRange([2,3,1,5]));
//print_r(implode(',',range(1,1000)));