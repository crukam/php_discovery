<?php

	$json_items = file_get_contents(__DIR__.'/seed_data/rolesIdentifiers.json',true);
	//$json = json_encode($file);
	/*foreach ($json_items as $json_string ){
		json_decode($json_string)
	}*/
	$data = json_decode($json_items,true);
	
	//echo "The file element is:".$json_items.PHP_EOL;
	echo "the json data are:";
	print_r($data);

	/*foreach ($data as $key => $role){
		echo "code ".$key." is : ".$role['role_code'].PHP_EOL;
		echo "name ".$key." is : ".$role['role_name'].PHP_EOL;
	}*/

	//echo "the code of roles are: ".PHP_EOL;
	//print_r(array_column($data, 'role_code'));

	echo " The values of roles are :".PHP_EOL;
	print_r(array_values($data));

	echo "the first element in array is : ".PHP_EOL;
	print_r(array_values($data[0]));

	if(in_array('ADVT', array_values($data[0]))) {
		echo "ADVT is in the array Wheey: ". PHP_EOL;
	}else{
		echo "ADVT is not in the array what a shame. ".PHP_EOL;
	}
	$boolean = in_array('bool bool', $data[0]);
	echo "I am trying to print a boolean scary!!! :".PHP_EOL;
	if ($boolean === true)
		echo "true".PHP_EOL;
	if ($boolean === false)
		echo "false".PHP_EOL;
	//triming special characters from a string
	$mystring = "I am the king of the' jungle* in @@@ african, savana!`whey whey.";
	$mystring_trimmed = preg_replace("/[^A-Za-z0-9 ]/", '', $mystring);
	echo "My string is :".PHP_EOL;
	print_r($mystring);
	echo PHP_EOL;
	echo "My trimmed string is :".PHP_EOL;
	print_r($mystring_trimmed);
	echo PHP_EOL;
