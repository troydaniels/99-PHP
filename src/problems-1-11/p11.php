<?php
//Modified run length encoding of an array
//This implementation does not maintain keys from original array
function modifiedEncode(array $a){
   $encodedArray=array();
   $items=count($a);
   $keys=array_keys($a);
   for($i=0; $i<$items; $i++){
      $j=1;                                 //Run counter
      $encodedArray[]=$a[$keys[$i]];        //run==1, add single value to array
      $subArray=array();
      while($i+1<$items && $a[$keys[$i]]==$a[$keys[$i+1]]){
         array_pop($encodedArray);          //run>1, remove last element
         unset($subArray[$j]);
         $subArray[++$j]=$a[$keys[$i]];     //Increment run counter
         $i++;
         $encodedArray[]=$subArray;         //And add run array to encoding
      }
      unset($subArray);
   }
   return $encodedArray;
}

//Tests
$b=array(1,2,2,3,4,5,5,5,6,7);
$c=array(1, array('2'=>'2'), 3, 4, array('3'=>'5'), 6, 7);
assert(modifiedEncode($b)==$c);
$d=array('apple'=>'juice', 'banana'=>'juice', 'prune'=>'juice', 'carrot'=>'cake', 'steak'=>'pie', 'chicken'=>'pie');
$e=array(array('3'=>'juice'), 'cake', array('2'=>'pie'));
assert(modifiedEncode($d)==$e);
?>
