<?php
//Function that returns the last element of an array
function last(array $a)
{
    $items = count($a);
    $last = NULL;
    $i = 0;
    foreach($a as $key => $value) {
        if(++$i == $items) {
            $last = $value;
        }
    }
    return $last;
}

//Tests
$b=array(1,2,3,4,5);
assert(last($b)==5);
$c=array("Mary", "Kate", "Ashley");
assert(last($c)=="Ashley");
$d=array('fruit'=>'apple','veggie'=>'carrot');
assert(last($d)=="carrot");
