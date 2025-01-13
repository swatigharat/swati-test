<?php
$array1 = ['a','b','c','d'];
$array2 = [1,3,5,7];
$merged_array = array_merge($array1,$array2);
echo "#Array merged With function";
echo "<br/><br/>";
print_r($merged_array);
echo "<br/><br/>";
echo "#Array merged Without function";
echo "<br/><br/>";
$merged_array_new=[];
foreach ($array1 as $value) {
    $merged_array_new[]=$value;
}
foreach ($array2 as $value2)
{
    $merged_array_new[]=$value2;
}
print_r($merged_array_new);
echo "<br/><br/>";
echo "#Array combine with function";
echo "<br/><br/>";
if(count($array1) == count($array2))
{
    $combined_array= array_combine($array1, $array2);
    print_r($combined_array);
}
else
{
    echo "Size of array is not same.";
}

echo "<br/><br/>";
echo "#Array combine without function";
echo "<br/><br/>";
$combined_array_new = [];
if(count($array1)==count($array2))
{
    foreach ($array1 as $key => $value1){
        $combined_array_new[$value1]=$array2[$key];
    }
    print_r($combined_array_new);
}
else
{
    echo "Size of array is not same.";
}
echo "<br/><br/>";
echo "#Sort an array in ascending order without using in built function";
echo "<br/><br/>";
$array = array(1, 6, 23, 10, 3, 2, 15,7);
$total = count($array);
echo $total;
for($i=0;$i<$total;$i++){
    for($j=$i+1;$j<$total;$j++)
    {
        if($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i]=$array[$j];
            $array[$j]=$temp;
        }
    }
    
}
echo "<pre>";
echo "Ascending order:";
print_r($array);
echo "<br/><br/>";
echo "#Sort an array in descending order without using in built function";
echo "<br/><br/>";
for($i=0;$i<$total;$i++)
{
    for($j=$i+1;$j<$total;$j++)
    {
        if($array[$i] < $array[$j])
        {
            $temp=$array[$i];
            $array[$i]=$array[$j];
            $array[$j]=$temp;
        }
    }
}
echo "<pre>";
echo "Descending order:";
print_r($array);
echo "<br/><br/>";
echo "#Sweap two variables without using third variable";
echo "<br/><br/>";
$a=20;$b=30;
$a = $a + $b;
$b = $a - $b;
$a= $a - $b;
echo "value of a: ".$a;
echo "<br>";
echo "value of b: ".$b;
echo "<br/><br/>";
echo "#Find max number from an array";
echo "<br/><br/>";
$max=$array[0];

for($i=0;$i<count($array);$i++)
{
    if($array[$i] > $max)
    {
        $max = $array[$i];
    }
   
}
echo "Max number from array: ".$max;
echo "<br>";
$array = array(1, 6, 23, 10, 3, 2, 15,7);
$min=$array[0];
for($i=0;$i<count($array);$i++)
{
    if($array[$i] < $min)
    {
        $min = $array[$i];
    }
}

echo "Min number from array: ".$min;
echo "<br/><br/>";
echo "display only the duplicate values from an array : ";
$arr = array(8,9,10,3,4,8,7,9,11,3);
foreach ($arr as $key => $value) {
    unset($arr[$key]);
    if(in_array($value, $arr))
    {
        echo $value . ' ';
    }
}
echo "<br><br>";
echo "combines two lists by alternatingly taking elements:";
echo "<br>";
$arr1= array(1,2,3);
$arr2 = array('a','b','c');
$new_array=[];
for($i=0;$i<count($arr1);$i++)
{
    $new_array[] =$arr1[$i]; 
    $new_array[] =$arr2[$i]; 
}
echo "<pre>";
print_r($new_array);

echo"<br>";
echo "String reverse without using strrev function:";
echo"<br>";
$str = "I Love My County";
$str_length = strlen($str);
for($i = ($str_length -1);$i >=0 ;$i--)
{
    echo $str[$i];
}

echo "<br>";
echo "Print pyramid";
echo "<br>";
$row = 5;
for($i=1;$i<=$row;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
$string = "Hello, world!";
echo strstr($string, "world"); 

echo "<br>";
$numbers = [1,2,3,4,5,6];
print_r(array_slice($numbers, 3));
echo "<br>";
print_r(array_slice($numbers, 3, 2));

echo "<br>";                                                                                          
$numbers = [1,2,3,4,5,6];
print_r(array_splice($numbers, 3, 2));
print_r($numbers);

?>