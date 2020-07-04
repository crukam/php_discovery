<?php
//sample 1
$name = 'claude';

function print_Name (){
    $name = 'Buyobe';
    echo $name;
}

print_Name();
echo $name;

//sample 2
//defining $name as a global variable

global $name ;
$name = 'nkuki';

function print_globalName (){
    $name = 'Karundi';
    echo "$name\n";
}

print_globalName();
echo "$name\n";

//sample3
function print_getglobalName (){
    echo "$name\n";
}
print_getglobalName ();
echo "$name\n";