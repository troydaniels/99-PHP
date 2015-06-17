<?php
//Function that returns the kth element of an array
function elementAt($position, array $a)
{
    $element = NULL;
    $i = 0;
    foreach($a as $key => $value) {
        if(++$i == $position) {
            $element = $value;
        }
    }
    return $element;
}

//Tests
$b=array(1,2,3,4,5);
assert(elementAt(2,$b)==2);
assert(elementAt(10, $b)==NULL);
$c=array('fruit'=>'apple','veggie'=>'carrot');
assert(elementAt(2, $c)=="carrot");
