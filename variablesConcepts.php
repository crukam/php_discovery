<?php
// Define a variable
$var_name = 'Claude Rukamiza';

//In php  variable can be used as string as well as an integer
$myawsomevariable = 2;
$myawsomevariable = "I love back end development in PHP!\n";
echo $myawsomevariable;

//Print variables with double or single quotes.

echo "Name of variable = $var_name"."\n";
echo 'Name of variable = $var_name'."\n";

// Variables typing converting string to integer and vice versa.

$length = "20";
$width = "10";
$area = $length * $width ." square meters\n";

echo $area;

//Variables is case sensitive

$name = "Paul Rusesabagina\n";
$NAME = "KAROL VANDERMERSH\n";

echo $name;
echo $NAME;
