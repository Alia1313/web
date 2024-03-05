<?php
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
