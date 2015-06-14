<?php
//Function that returns the last but one element of a list
//(prior implementations show returning last two elements)
function lastTwo(array $a){
   $items=count($a);
   $i=0;
   $secondLast=array();
   foreach($a as $key=>$value){
      if($items>2 && ($i == $items-2 || $i == $items-1)){
         $secondLast[$key]=$value;
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

?>
