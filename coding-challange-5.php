<?php
// With a given word w and a string s find the indexes in s that are the start of the word w. 
// For example with w='ab' and s='abxaba' the result would be an array [0,3,4].  
// Try it without using the built in PHP functions to find the string position

function findIndexes($w, $s){
    $array = [];
	$length = strlen($s);
	for($i = 0; $i < $length; $i++){
		if ($w[0] == $s[$i]){
			array_push($array, $i);
		}
	}
	return $array;
}

var_dump(findIndexes('ab', 'abxaba'));