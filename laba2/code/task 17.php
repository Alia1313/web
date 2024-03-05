<?php
//task 17
echo "\ntask 17\n";

#
$array = [];

for ($i = 1; $i < 10; ++$i) {
    $tempStr = "";
    for ($j = 0; $j < $i; ++$j) {
        $tempStr .= "x";
    }
    array_push($array, $tempStr);
}
echo "'x' array: ";
foreach ($array as $item) {
    echo "$item ";
}
echo "\n";

#
function arrayFill(string $elem, int $num): array
{
    $newArray = [];
    while (sizeof($newArray) < $num) {
        array_push($newArray, $elem);
    }
    return $newArray;
}

echo "arrayFill: ";
$array = arrayFill('x', 5);
foreach ($array as $item) {
    echo "$item ";
}
echo "\n";

#
$array = [[1, 2, 3], [4, 5], [6]];
echo "2-D array : ";
foreach ($array as $item) {
    foreach ($item as $value) {
        echo "$value ";
    }
}
echo "\n";
$newSum = 0;
foreach ($array as $item1) {
    foreach ($item1 as $item2) {
        $newSum += $item2;
    }
}
echo "Sum of 2-D array : " . $newSum . "\n";

#
echo "2-D array: ";
$array = [];
$firstDim = 3;
$secondDim = 3;
$cnt = 1;
for ($i = 0; $i < $firstDim; ++$i) {
    $tempArray = [];
    array_push($array, $tempArray);
    for ($j = 0; $j < $secondDim; ++$j) {
        array_push($array[$i], $cnt);
        $cnt++;
    }
}
foreach ($array as $item) {
    foreach ($item as $value) {
        echo "$value ";
    }
}
echo "\n";

#
$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo "result is $result" . "\n";

#
$user = ['name' => "Aliya", 'surname' => "Yarkaeva", 'patronymic' => "Rayanovna"];
echo "surname: " . $user['surname'] . ", name: " . $user['name'] . ", patronymic: " . $user['patronymic'] . "\n";

#
$date = ['year' => "2024", 'month' => "march", 'day' => "5"];
echo $date['year'] . "-" . $date['month'] . "-" . $date['day'] . "\n";

#
$arr = ['a', 'b', 'c', 'd', 'e'];
$size = sizeof($arr);
echo "size: $size" . "\n";
$lastElemIndex = $size - 1;
$predLastElemIndex = $size - 2;
echo "last elem: $arr[$lastElemIndex]" . "\n";
echo "pred last elem: $arr[$predLastElemIndex]" . "\n";
