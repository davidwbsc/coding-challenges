<?php
//Take an array of integers and for each integer in the array find the number of smaller elements to the right of that element.
//So [3, 4, 9, 6, 1] would return [1, 1, 2, 1, 0]

function smallerElemsAfter($array){
	$length = count($array);
	$outputArray = [];
	$highest = 0;
	for($i = 0; $i < $length; $i++){
		$smallerElemCount = 0;
		for($j = $i; $j < $length; $j++){
			if($array[$j] < $array[$i]){
				$smallerElemCount++;
			}
		}
		$outputArray[$i] = $smallerElemCount;
	}
	return $outputArray;
}
var_dump(smallerElemsAfter([10, 4, 1, 1, 1]));