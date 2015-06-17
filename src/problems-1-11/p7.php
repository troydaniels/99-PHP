<?php
//Flatten a nested array structure
function flatten($a)
{
    $flatArray = array();
    if(is_array($a)){
        foreach($a as $element) {
            $flatArray = array_merge($flatArray, flatten($element));
        }
    } else {
        $flatArray[] = $a;
    }
    return $flatArray;
}

//Tests
$b=array(1,2,array(3,array(4)),array(5,6),7);
assert(flatten($b)==array(1,2,3,4,5,6,7));


