<?php
//Decode a run length encoded array
function decode($a){
   $decodedArray=array();
   for($i=0; $i<count($a); $i++){
      if(is_array($a[$i])){
         $keys=array_keys($a[$i]);    //Based on encoding, if we have an array, it will only ever have one key
         for($j=0; $j<$keys[0]; $j++){
            $decodedArray[]=$a[$i][$keys[0]];
         }
      }else{
         $decodedArray[]=$a[$i];
      }  
   }
   return $decodedArray;
}

//Tests
$b=array(array('4'=>'a'), b, array('2'=>'c'), array('2'=>'a'), d, array('4'=>'e'));
assert(decode($b)==array(a,a,a,a,b,c,c,a,a,d,e,e,e,e));
$c=array(array('2'=>'carrot'), 'fish');
assert(decode($c)==array('carrot', 'carrot', 'fish'));
?>
