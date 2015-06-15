<?php
//Rotate an array N places to the left
//Keys are not maintained in this implementation
function rotate(array $a, $places){
   $partition=splitArray($a, $places);
   $rotatedArray=array();
   foreach(array_reverse($partition) as $section){
      foreach($section as $key=>$value){
         $rotatedArray[]=$value;
      }
   }
   return $rotatedArray;
}

//Split an array into two parts; the length of the first part is given
function splitArray(array $a, $splitNumber){
   $first=$second=array();
   foreach($a as $key=>$value){
      if($splitNumber>0){
         $first[$key]=$value;
         $splitNumber--;
         continue;
      }
      $second[$key]=$value;
   }
   //If both arrays are empty, return an empty array
   $splitArray=($first||$second)?array($first,$second):array();
   return $splitArray;
}

//Tests
$b=array(1,2,3,4,5,6,7);
$c=array(3,4,5,6,7,1,2);
assert(rotate($b,2)==$c);

?>
