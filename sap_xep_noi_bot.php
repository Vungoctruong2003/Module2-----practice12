<?php
$myList = [-5, 3, 2, 8, 5, 9, 1];
$count = count($myList);
for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j > $count - $i - 1; $j++) {
        if ($myList[$j] < $myList[$j + 1]) {
            $temp = $myList[$j];
            $myList[$j] = $myList[$j + 1];
            $myList[$j + 1] = $temp;
        }
    }
}
for ($i=0; $i<$count; $i++){
    echo $myList[$i]." ";
}