<?php
//Insert an element at a given position into an array
//If the position is larger or equal to the length
//of the array, insert the element at the end. (The behavior is unspecified if the position
//is negative.)
function insertAt(array $a, $element, $position){
   $index=0;
   $length=count($a);
   $result=array();
   //Finish if we've passed the end of the array AND the position of the new element
   while($index<=$length || $index<=$position){
      if($index>=$length && $index<$position){  //$position is greater than size of array
         $result[]=$element;                    //so add and finish
         break;
      }
      //If we're at the correct position add new element, else, add first element of array
      $result[]=($index++==$position-1)?$element:array_shift($a);
   }
   return $result;
}

//Tests
$b=array(1,2,3,4,5,6,7);
$c=array(1,'foo',2,3,4,5,6,7);
assert(insertAt($b, 'foo', 2)==$c);
$d=array('foo'=>'bar', 'baz'=>'far', 'boo'=>'faz');
$e=array('bar', 'far', 2=>123, 'faz');
assert(insertAt($d, 123, 3)==$e);
$f=array(1,2,3,4,5,6,7,'foo');
assert(insertAt($b, 'foo', 100)==$f);
?>
