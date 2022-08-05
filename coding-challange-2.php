<?php
// Take an array of integers that are out of order and find the range of the smallest window that must be sorted for the entire array to be sorted.  
//eg. The array [3,7,5,6,9] needs the range (1,3) to be sorted to make the whole array sorted (using a zero based index for the range).
function findRangeToSort1($array){
    $arraysort = $array;
    sort($arraysort);
    $start = 0;
    $end = 0;
    for ($i = 0; $i < count($array); $i++){
        if($array[$i] != $arraysort[$i]){
            $start = $i;
            break;
        }
    }
    for ($i = count($array) - 1; $i >= 0; $i--){
        if($array[$i] != $arraysort[$i]){
            $end = $i;
            break;
        }
    }
    $range = '(' . $start . ',' . $end . ')';
    echo $range;
}

function findRangeToSort2($array){
    $arraysort = $array;
    sort($arraysort);
    $difference = array_diff_assoc($array, $arraysort);
    $range = '(' . array_key_first($difference) . ',' . array_key_last($difference) . ')';
    echo $range;
}

findRangeToSort1([3,7,5,6,9]); // 1,3
findRangeToSort1([3,4,5,6,0]); // 0,4
findRangeToSort1([8,7,5,6,9]); // 0,3
findRangeToSort1([1,2,3,6,9,3,7,5,6,9]); // 3,8
findRangeToSort1([2,7,5,6,9,7,5]); // 1,6 
findRangeToSort1([0,7,5,8,9]); // 1,2