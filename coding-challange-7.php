<?php
// This one is fun and not as easy as it appears.  
// Take a string and a number of lines k and print the string in zigzag form. 
// ZigZag form is printing the string diagonally from top left to bottom right until reaching the kth line 
// and then going back up to the top right.

function zigzag ($string, $k) {
	if($k == 1){
		echo $string;
		return;
	}
	$length = strlen($string);
	$spaces = $k + ($k - 2);
	$innerlines = $k - 2;
	for($i = 0; $i < $length; $i++){
		if($i % $spaces === 0){
			echo $string[$i];
		}else{
			echo ' ';
		}
	}
	echo PHP_EOL;
	for($i = 1; $i <= $innerlines; $i++){
		for($j = 0; $j < $length; $j++){
			if(($j-($spaces + $i)) % $spaces === 0 || ($j-($spaces - $i)) % $spaces === 0){
				echo $string[$j];
			}else{
				echo ' ';
			}
		}
		echo PHP_EOL;
	}
	for($i = 0; $i < $length; $i++){
		if(($i-($k - 1)) % ($spaces) === 0){
			echo $string[$i];
		}else{
			echo ' ';
		}
	}	
}

zigzag('THISPROBLEMISAWESOME', 4);