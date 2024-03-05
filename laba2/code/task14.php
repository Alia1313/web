<?php
//task 14
echo "\ntask 14\n";

#
$a = 10;
$b = 3;
$c = $a % $b;
echo "a % b = $c\n";

#
if ($c == 0) {
    echo "divisible \n";
} else {
    echo "divisible with remainder: $c\n";
}

#
$st = pow(2, 10);
echo "2^10 = $st\n";

#
$root = sqrt(245);
echo " 245^(0.5) $root\n";

#
$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $item) {
    $sum += $item ** 2;
}
$root = sqrt($sum);
echo "the square root of the sum of the squares of the elements = $root\n";

#
$root = sqrt(379);
$rootNum = round($root);
$rootTen = round($root, 1);
$rootThousand = round($root, 2);
echo "to numbers: $rootNum\n";
echo "to tens: $rootTen\n";
echo "to thousands: $rootThousand\n";

#
$root = sqrt(587);
$rootTop = ceil($root);
$rootBot = floor($root);

$array = ["ceil" => $rootTop, "floor" => $rootBot];
var_dump($array);

#
$array = [4, -2, 5, 19, -130, 0, 10];
$minimum = min($array);
echo "minimum from array = $minimum\n";

$maximum = max($array);
echo "maximum from array = $maximum\n";

#
$randNum = rand(1, 100);
echo "random number = $randNum\n";

#
$array = [];

while (sizeof($array) < 11) array_push($array, rand(1, 1000));
echo "10 random numbers = ";
foreach ($array as $item) {
    echo "$item ";
}
echo "\n";

#
$a = rand(1, 100);
$b = rand(1, 100);
$abs = abs($a - $b);
echo "a= $a, b= $b module = $abs\n";

#
$array = [1, 2, -1, -2, 3, -3];
$newArray = [];
foreach ($array as $item) {
    array_push($newArray, abs($item));
}
echo "origin array is ";
foreach ($array as $item) {
    echo "$item ";
}
echo "\n";
echo "array with only positive is ";
foreach ($newArray as $item) {
    echo "$item ";
}
echo "\n";

#
$num = rand(1, 1000);
echo "number = $num\n";

$array = [];
for ($i = 1; $i <= sqrt($num) + 1; ++$i) {
    if ($num % $i == 0) {
        array_push($array, $i);
    }
}
for ($i = sizeof($array) - 1; $i >= 0; --$i) {
    $temp = $num / $array[$i];
    if (!in_array($temp, $array)) {
        array_push($array, $temp);
    }
}
echo "its divisors: ";
foreach ($array as $item) {
    echo "$item ";
}
echo "\n";

#
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$cnt = 0;
$temp_sum = 0;
foreach ($array as $item) {
    $temp_sum += $item;
    $cnt++;
    if ($temp_sum > 10) break;
}
echo "we should summarize first $cnt elements to receive sum greater than 10\n";
