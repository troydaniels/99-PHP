<?php
//Extract a slice from an array
//Given two indices, I and K, the slice is the list containing the elements between the I'th
//and K'th element of the original arrray (both limits included). Start counting the elements with 1.
//This implementation maintains keys, and assumes limits are appropriately sized
function sliceArray(array $a, $lowElement, $upElement){
   $position=0;
   $slArray=array();
   foreach($a as $key=>$value){
      $position++;
      if($position<=$upElement && $position>=$lowElement){
         $slArray[$key]=$value;
      }
   }
   return $slArray;
}

//Tests
$b=array(1,2,3,4,5);
$c=array(1=>2,2=>3,3=>4);
assert(sliceArray($b, 2, 4)==$c);
$d=array('hi'=>'ho', 'he'=>'ho');
$e=array('he'=>'ho');
assert(sliceArray($d, 2,2)==$e);
$f=array();
assert(sliceArray($f, 0, 0)==$f);
?>
