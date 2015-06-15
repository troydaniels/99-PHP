<?php
//Duplicate the elements of an array
//This implementation does not maintain keys
function duplicate(array $a){
   $dupArray=array();
   foreach($a as $key=>$value){
      array_push($dupArray, $value, $value);
   }
   return $dupArray;
}

//Tests
$b=array(1,2,3,4,5);
assert(duplicate($b)==array(1,1,2,2,3,3,4,4,5,5));
$c=array('hi'=>'ho', 'he'=>'ho');
assert(duplicate($c)==array('ho','ho','ho','ho'));
$d=array();
assert(duplicate($d)==$d);
?>
