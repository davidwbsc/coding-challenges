<?php
//Given an array of integers return a new array so that each element at index i is the product of all the other numbers in the array except the number at index i.  
//So for the array [1 ,2 , 3 , 4, 5] the output would be [120, 60, 40, 30, 24] . If the input was [1, 2, 3] then the output would be [6, 3, 2]

function arrayProduct1 ($array) {
	$newArray = [];
	$arrayLength = count($array);
	
	for($i = 0; $i < $arrayLength; $i++)
	{
		$product = 1;
		for($j = 0; $j < $arrayLength; $j++)
		{
			if($j != $i)
			{
				$product = $product * $array[$j];
			}
		}
		$newArray[$i] = $product;
	}
	return $newArray;
}

function arrayProduct2($array) {
	return array_map(fn($i) => array_product($array) / $i, $array);
}

var_dump(arrayProduct1([1 ,2 , 3 , 4, 5]));
var_dump(arrayProduct1([4,7,9,12,8,9]));
var_dump(arrayProduct2([1 ,2 , 3 , 4, 5]));
var_dump(arrayProduct2([4,7,9,12,8,9]));

