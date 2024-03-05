<?php
//task 1
echo "task 1\n";

$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and shefburger";
echo "Your order is: $very_bad_unclear_name.\n";