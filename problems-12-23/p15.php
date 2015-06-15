<?php
//Replicate the elements of an array a given number of times
//This implementation does not maintain keys
function replicate(array $a, $times){
   $repArray=array();
   foreach($a as $key=>$value){
      $i=$times;
      while($i--)
         $repArray[]=$value;
   }
   return $repArray;
}

//Tests
$b=array(1,2,3,4,5);
assert(replicate($b, 3)==array(1,1,1,2,2,2,3,3,3,4,4,4,5,5,5));
$c=array('hi'=>'ho', 'he'=>'ho');
assert(replicate($c, 2)==array('ho','ho','ho','ho'));
$d=array();
assert(replicate($d, 10)==$d);
?>
