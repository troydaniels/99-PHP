<?php
//Drop every N'th element from an array
function drop(array $a, $elNumber){
   $dropArray=array();
   $position=0;
   foreach($a as $key=>$value){
      if(++$position && $position%$elNumber)
         $dropArray[]=$value;
   }
   return $dropArray;
}

//Tests
$b=array(1,2,3,4,5);
assert(drop($b, 2)==array(1,3,5));
$c=array('hi'=>'ho', 'he'=>'ho');
assert(drop($c, 1)==array());
$d=array();
assert(drop($d, 10)==$d);
?>
