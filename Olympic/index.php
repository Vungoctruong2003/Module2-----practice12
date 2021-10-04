<?php
include_once "Country.php";
include_once "ArrayList.php";
$arrayList = new ArrayList();
$country1 = new Country("VietNam",5);
$country2 = new Country("Portugal",1);
$country3 = new Country("Brazil",15);
$country4 = new Country("ThaiLand",3);
$country5 = new Country("England",8);

$arrayList->addCountry($country1);
$arrayList->addCountry($country2);
$arrayList->addCountry($country3);
$arrayList->addCountry($country4);
$arrayList->addCountry($country5);

 print_r( $arrayList->sortList());
