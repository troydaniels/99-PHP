<?php
//Remove the K'th element from an array
function removeAt(array $a, $element){
   $position=1;
   $result=array();
   foreach($a as $key=>$value){
      if($element!=$position++){
         $result[$key]=$value;
      }
   }
   return $result;
}

//Tests
$b=array(1,2,3,4,5,6,7);
$c=array(1,2,3,4=>5,6,7);
assert(removeAt($b,4)==$c);
$d=array('foo'=>'bar', 'baz'=>'far', 'boo'=>'faz');
$e=array('baz'=>'far', 'boo'=>'faz');
assert(removeAt($d,1)==$e);

?>
