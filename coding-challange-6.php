<?php
// Given a list of words find the indices of words that when joined will form a palindrome.  
// e.g. given the works ["code", "edoc", "da", "d"] return [(0,1), (1,0), (2,3)]

function reverseString($string){
	$length = strlen($string);
	$stringReversed = '';
	for($i = 0; $i < $length; $i++){
		$stringReversed = $string[$i] . $stringReversed;
	}	
	return $stringReversed;
}

function findPalindromes ($words) {
	$array = [];
	$length = count($words);
	for ($i = 0; $i < $length; $i++){
		for ($j = 0; $j < $length; $j++){
			if ($i != $j){
				$joinedString = $words[$i] . $words[$j];
				if ($joinedString == reverseString($joinedString)){
					array_push($array, "({$i}, {$j})");
				}
			}
		}
	}
	return $array;
}

print_r(findPalindromes(["code", "edoc", "da", "d"]));