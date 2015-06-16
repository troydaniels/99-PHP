<?php
//Create an array containing all integers within a given range.
//If first argument is larger than second, produce an array in decreasing order.
function arrayRange($a, $b){
   $step=($a<$b)?1:-1;
   $result=array();
   for(; $a!=$b+$step; $a+=$step)
      $result[]=$a;
   return $result;
}

//Tests
$c=array(-1,0,1,2,3);
assert(arrayRange(-1,3)==$c);
$d=array(1);
assert(arrayRange(1,1)==$d);
$e=array(3,2,1);
assert(arrayRange(3,1)==$e);
?>
