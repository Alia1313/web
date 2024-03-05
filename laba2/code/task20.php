<?php
//task 20
echo "\ntask20 \n";

#
$array = [1, 10, 15, 11, 63, 16, 45, 35];
$mean = array_sum($array) / sizeof($array);
echo "arithmetic mean = $mean" . "\n";

#
$sumThousand = array_sum(range(1, 100));
echo "sum 1 to 100 = $sumThousand" . "\n";

#
$array = [16, 144, 400];
$newArray = array_map('sqrt', $array);

echo "origin array = ";
foreach ($array as $value) echo "$value \n ";
echo "square rooted array = ";
foreach ($newArray as $value) echo "$value\n ";

#
$array = array_combine(range('a', 'z'), range(1, 26));
echo "a-z and 1-26 array = ";
var_dump($array);

#
$str = "1234567890";
$array = str_split($str, 2);
$sum = array_sum($array);
echo "sum by pairs = $sum" . "\n";
