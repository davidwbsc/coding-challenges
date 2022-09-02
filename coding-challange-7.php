<?php
// This one is fun and not as easy as it appears.  
// Take a string and a number of lines k and print the string in zigzag form. 
// ZigZag form is printing the string diagonally from top left to bottom right until reaching the kth line 
// and then going back up to the top right.

$string = 'THISPROBLEMISAWESOME';
$k = 4;

T.....O.....S.....M.
.H...R.B...I.A...O.E 
..I.P...L.M...W.S...
...S.....E.....E....

<?php

function zigzag ($string, $k) {
	$length = strlen($string);
	$spaces = $k+2;
	$innerlines = $k-2;
	for($i = 0; $i < $length; $i++){
		if($i % ($spaces) === 0){
			echo $string[$i];
		}else{
			echo ' ';
		}
	}
	echo PHP_EOL;
	
	
	// for($i = $innerlines-1; $i >= 0; $i--){

	// 	for($j = 0; $j < $length; $j++){
	// 		if(($j-($k-($i+2))) % ($spaces) === 0 || ($j-($k-($i+$k))) % ($spaces) === 0){
	// 			echo $string[$j];
	// 		}else{
	// 			echo ' ';
	// 		}
	// 	}
	// echo PHP_EOL;		
	// }
	for($i = 0; $i < $length; $i++){
		if(($i-($k-4)) % ($spaces) === 0 || ($i-($k-10)) % ($spaces) === 0 ){
			echo $string[$i];
		}else{
			echo ' ';
		}
	}
	echo PHP_EOL;	
	for($i = 0; $i < $length; $i++){
		if(($i-($k-3)) % ($spaces) === 0 || ($i-($k-5)) % ($spaces) === 0 ){
			echo $string[$i];
		}else{
			echo ' ';
		}
	}
	echo PHP_EOL;
	for($i = 0; $i < $length; $i++){
		if(($i-($k-2)) % ($spaces) === 0 || ($i-($k-0)) % ($spaces) === 0 ){
			echo $string[$i];
		}else{
			echo ' ';
		}
	}	
	echo PHP_EOL;
	
	
	
	
	
	
	
	for($i = 0; $i < $length; $i++){
		if(($i-($k - 1)) % ($spaces) === 0){
			echo $string[$i];
		}else{
			echo ' ';
		}
	}	
}

zigzag('THISPROBLEMISAWESOME', 5);

// H B A E