<?php
//Take an array of numbers and find the highest sum of any continuous subarray of the array.  
//e.g. The array [34, -50, 42, 14, -5, 86] would have a maximum of 137 taking the elements 42, 14, -5 and 86.  
//With the array [-5, -1, -8, -9] the maximum sum would be 0 because we would choose not to take any elements.

function highestSum($array){
	$length = count($array);
	$highest = 0;
	for($i = 0; $i < $length; $i++){
		$currentHighest = 0;
		for($j = $i; $j < $length; $j++){
			$currentHighest += $array[$j];
			if($currentHighest > $highest){
				$highest = $currentHighest;
			}
		}
	}
	return $highest;
}
var_dump(highestSum([34, 50, 42, -14, -5, 86]));

//Kadane's Algorithm

// fn max_subarray_sum2(arr:&[i32]) -> i32{
//     let mut current_max = 0;
//     let mut max_ending_here = 0;
//     for x in arr {
//         max_ending_here = max(*x, max_ending_here + x);
//         current_max = max(current_max, max_ending_here);
//     }

//     current_max
// }