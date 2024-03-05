<?php
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
