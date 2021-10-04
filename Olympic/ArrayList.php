<?php

class ArrayList
{
    protected $myList;

    function __construct()
    {
        $this->myList = [];
    }

    function addCountry($country)
    {
        array_push($this->myList, $country);
    }

    function sortList()
    {
        for ($i = 0; $i < count($this->myList); $i++) {
            $val = $this->myList[$i];
            $j = $i - 1;
            while ($j >= 0 and $this->myList[$j]->totalGoldMedals > $val->totalGoldMedals) {
                $this->myList[$j + 1] = $this->myList[$j];
                $j--;
            }
            $this->myList[$j + 1] = $val;
        }
        for ($i=0; $i<count($this->myList); $i++){
            echo "<bre> ";
            $this->myList[$i]->readCountry();
            echo "<br>";
        }
    }
}