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

	echo "the code of roles are: ".PHP_EOL;
	print_r(array_column($data, 'role_code'));