<?php
//Function that returns a reversed array
//As all arrays in PHP are hashes, this function will reverse the order of the
//values, and assign them back to the keys
function reverse(array $a)
{
    $values = array_values($a);
    $items = count($a);
    $reversedArray = array();
    $i = 1;
    foreach($a as $key => $value) {
        $reversedArray[$key] = $values[$items-$i];
        $i++;
    }
    return $reversedArray;
}

//Tests
$b=array(1,2,3,4,5);
assert(reverse($b)==array(5,4,3,2,1));
$c=array('fruit'=>'apple','veggie'=>'carrot');
assert(reverse($c)==array('fruit'=>'carrot','veggie'=>'apple'));

