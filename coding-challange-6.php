<?php
// Given a list of words find the indices of words that when joined will form a palindrome.  
// e.g. given the works ["code", "edoc", "da", "d"] return [(0,1), (1,0), (2,3)]

function reverseString1($string){
	$length = strlen($string);
	$stringReversed = '';
	for($i = 0; $i < $length; $i++){
		$stringReversed = $string[$i] . $stringReversed;
	}	
	return $stringReversed;
}

function findPalindromes1 ($words) {
	$array = [];
	$length = count($words);
	for ($i = 0; $i < $length; $i++){
		for ($j = 0; $j < $length; $j++){
			if ($i != $j){
				$joinedString = $words[$i] . $words[$j];
				if ($joinedString == reverseString1($joinedString)){
					array_push($array, "({$i}, {$j})");
				}
			}
		}
	}
	return $array;
}

print_r(findPalindromes1(["code", "edoc", "da", "d"]));



function reverseString2($string){
	$length = strlen($string);
	$stringReversed = '';
	for($i = 0; $i < $length; $i++){
		$stringReversed = $string[$i] . $stringReversed;
	}	
	return $stringReversed;
}

function findPalindromes2 ($words) {
	$length = count($words);
	$array = [];
	$wordsReversed = [];
	$wordsReversedTrimLeft = [];
	$wordsReversedTrimRight = [];
	for ($i = 0; $i < $length; $i++) {
		$reversedWord = reverseString2($words[$i]);
		$wordsReversed[$i] = $reversedWord;
		$wordsReversedTrimLeft[$i] = substr($reversedWord, 1);
		$wordsReversedTrimRight[$i] = substr($reversedWord, 0, -1);
	}
	for ($i = 0; $i < $length; $i++){
		$index = array_search($words[$i], $wordsReversed);
		if($index == $i){
			$index = false;
		}
		if(!is_int($index) && $index != $i){
			$index = array_search($words[$i], $wordsReversedTrimLeft);
		}
		if(!is_int($index) && $index != $i){
			$index = array_search($words[$i], $wordsReversedTrimRight);
		}
		if(is_int($index)){
			array_push($array, "({$i}, {$index})");
		}
	}
	return $array;
}

print_r(findPalindromes2(["code", "edoc", "da", "d", "cat", "ac", "oll", "ello"]));
