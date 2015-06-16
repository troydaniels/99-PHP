<?php
//Extract a given number of randomly selected elements from an array.
function randSelect(array $a, $number){
   $result=array();
   while(($number--)>0 && !empty($a)){
      $keys=array_keys($a);
      $position=rand(0, count($a)-1);  //Select element at this position
      $result[]=$a[$keys[$position]];
      unset($a[$keys[$position]]);
   }
   return $result;
}

//Tests
$b=array(1,2,3,4,5,6,7,8,9,10);
assert(count(randSelect($b, 12))==10);

?>
