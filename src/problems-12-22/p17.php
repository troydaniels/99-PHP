<?php
//Split an array into two parts; the length of the first part is given
//Do not use any predefined predicates
//This implementation maintains keys
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
$b=array(1,2,3,4,5);
$c=array(array(0=>1,1=>2),array(2=>3,3=>4,4=>5));
assert(splitArray($b, 2)==$c);
$d=array('hi'=>'ho', 'he'=>'ho');
$e=array(array(),array('hi'=>'ho','he'=>'ho'));
assert(splitArray($d, 0)==$e);
$f=array();
assert(splitArray($f, 10)==$f);
?>
