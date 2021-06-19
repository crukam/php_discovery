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


print_r(solutionTheOddOut([1, 1, 6, 4, 4,6,74]).PHP_EOL);
//print_r(implode(',',range(1,1000)));