<?php
//task 18
echo "\ntask18\n";

#
function sumGreaterThanTen(int $a, int $b): bool
{
    return ($a + $b) > 10;
}

echo "sumGreaterThanTen: ";
if (sumGreaterThanTen(13, 13)) {
    echo "true" . "\n";
} else {
    echo "false" . "\n";
}

#
function isEqual(float $a, float $b): bool
{
    return $a == $b;
}

echo "isEqual: ";
if (isEqual(10, 10)) {
    echo "true" . "\n";
} else {
    echo "false" . "\n";
}

#
$test = 0;
if (!$test) echo "верно" . "\n";

#
$age = rand(1, 200);
echo "age = $age" . "\n";
if ($age < 10 || $age > 99) {
    echo "age < 10 or > 99" . "\n";
} else {
    echo "age is between 10 and 99" . "\n";
    $sum = 0;
    while ($age > 0) {
        $sum += $age % 10;
        $age = floor($age / 10);
    }
    if ($sum <= 9) {
        echo "the sum of the digits of the number is unambiguous: $sum" . "\n";
    } else {
        echo "the sum of the digits of this number is two-digits: $sum" . "\n";
    }
}

#
$arr = [1, 3, 5];
if (sizeof($arr) == 3) {
    $sum = 0;
    foreach ($arr as $value) $sum += $value;
    echo "array size = 3 and sum of its elements = $sum" . "\n";
}