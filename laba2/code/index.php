<?php
//task 1
echo "task 1\n";

$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and shefburger";
echo "Your order is: $very_bad_unclear_name.\n";

//task 2
echo "\ntask 2\n";

$newInt = 13;
echo $newInt . "\n";

$newFloat = 1.11;
echo $newFloat . "\n";

echo 6 + 6 . "\n";

$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo $lastMonth - $thisMonth . "\n";
//task 11
echo "\ntask 11\n";

$numLanguages = 4;
$months = 11;

$days = 16 * $months;

$daysPerLanguages = $days / $numLanguages;
echo "$daysPerLanguages per programming language\n";


//task 12
echo "\ntask 12\n";

$squared = 8 ** 2;
echo "8^2 = $squared\n";

//task 13
echo "\ntask 13\n";

$myNum = 52;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "answer $answer\n";

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

//task 15
echo "\ntask 15\n";

#
function printStringReturnNumber(): int
{
    $num = rand(1, 100);
    echo "something\n";
    return $num;
}

#
$myNum = printStringReturnNumber();

#
echo "myNum is $myNum\n";

//task 16
echo "\ntask 16\n";

#
function increaseEnthusiasm(string $str)
{
    return $str . "!";
}

echo increaseEnthusiasm("kitty") . "\n";

#
function repeatThreeTimes(string $str)
{
    return $str . $str . $str;
}

echo repeatThreeTimes("meow") . "\n";

#
echo increaseEnthusiasm(repeatThreeTimes("mrrr")) . "\n";

#
function cut(string $str, int $num = 10): string
{
    return substr($str, 0, $num);
}

$newStr = "bla bla bla";
echo "cut function: " . cut($newStr, 5) . "\n";

#
function arrayOutput(array $arr)
{
    if (sizeof($arr) == 0) {
        echo "\n";
        return 0;
    }
    echo $arr[0] . " ";
    array_splice($arr, 0, 1);
    return arrayOutput($arr);
}

echo "output by recursion: ";
arrayOutput([5, 1, 3]);

$newNum = rand(100, 1000);

#
function numSum(int $num)
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = floor($num / 10);
    }
    if ($sum > 9) {
        return numSum($sum);
    }
    return $sum;
}

echo "New num = $newNum, if we put it in our function: " . numSum($newNum) . "\n";

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





