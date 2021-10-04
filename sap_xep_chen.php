<?php
function insertionSort($arr){
    for($i=0; $i<count($arr); $i++){
        $temp = $arr[$i];
        $j = $i-1;
        while ($j>=0 and $arr[$j]>$temp){
            $arr[$j+1] = $arr[$j];
            $j--;
        }
       $arr[$j+1] = $temp;
    }
    return $arr;
}
var_dump(insertionSort([1,6,3,7,4]));