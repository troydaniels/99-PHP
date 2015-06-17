<?php
//Function that returns the last but one elements of an array
function lastTwo(array $a)
{
    $items = count($a);
    $i = 1;
    $secondLast = array();
    foreach($a as $key => $value) {
        if($items > 2 && ($i == $items-1 || $i == $items)) {
            $secondLast[$key] = $value;
        }
        $i++;
    }
    return $secondLast;
}

//Tests
$b=array(1,2,3,4,5);
assert(lastTwo($b)==array(3=>4,4=>5));
$c=array("Mary");
assert(lastTwo($c)==array());
