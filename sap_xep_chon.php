<?php
function selectionSort($array)
{
    for ($i=0; $i<count($array); $i++){
        $min = $i;
        for ($j=$i+1; $j<count($array); $j++){
            if($array[$j]<$array[$min]){
                $min = $j;
            }
        }
   $array = swap($array,$min,$i);
    }
return $array;
}

function swap($data,$left,$right){
    $oldRight = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $oldRight;
    return $data;
}
$myArray = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "Original Array :\n";
echo implode(', ', $myArray);
echo "<br>";
echo "\nSorted Array :\n";
echo implode(', ', selectionSort($myArray));
