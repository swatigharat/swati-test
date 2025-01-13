<?php
$array1=[1,2,3,4];
$array2 = ['a','b','c','d'];

$combine_array = [];

foreach($array1 as $value)
{
    $combine_array[] = $value;
}
foreach($array2 as $value1)
{
    $combine_array[]=$value1;
}

print_r($combine_array);

echo php_info();


?>
