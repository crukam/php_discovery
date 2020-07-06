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

//Variable scope
$counter = 1;
function show_counter(){
    $counter = 2;
    echo "$counter\n";
}
show_counter();
echo "$counter \n";

//Global variable
global $global_counter;
$global_counter = 1;
function show_globalcounter(){
    global $global_counter;
    $global_counter = 2;
    echo " $global_counter\n";
}
show_globalcounter();
echo "$global_counter \n";

//Elegant global variable acces
global $elegant_counter;
$elegant_counter = 1;
function show_elegantcounter(){
    $GLOBALS['elegant_counter'] = 120987890;
    echo $GLOBALS['elegant_counter']."\n";
    echo $GLOBALS['global_counter']."\n";
}
show_elegantcounter();
echo "$elegant_counter \n";

//static variable;
$static_counter = 1;
echo $static_counter."\n";
function display_counter(){
    static $static_counter = 1;
    $static_counter = $static_counter + 1;
    echo $static_counter."\n";

}
display_counter();
echo $static_counter."\n";

//isset in php
$elegant_counter = "elegant_counter";
$message = isset($$elegant_counter)? "The variable is set.\n":  "The variable is not set.\n";
$message_two = isset ($random_variable)? "The variable is  set\n": "The variable is not set\n";
$random_variable = 9;
echo $message;
echo $message_two;