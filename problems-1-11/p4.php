<?php
//Function that finds the number of elements in an array
function numElements(array $a){
   //Avoid using  PHP's count() function
   $i=0;
   $secondLast=array();
   foreach($a as $key=>$value){
     $i++;
   }
   return $i;
}

//Tests
$b=array(1,2,3,4,5);
assert(numElements($b)==5);
$c=array();
assert(numElements($c)==0);

?>
