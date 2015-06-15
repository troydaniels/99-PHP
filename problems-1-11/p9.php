<?php
//Pack consecutive duplicates of array elements into subarrays
//This implementation maintains keys
function packArray(array $a){
   $packedArray=array();
   $items=count($a);
   $keys=array_keys($a);
   for($i=0; $i<$items; $i++){
      $subArray=array($keys[$i]=>$a[$keys[$i]]);
      while($i+1<$items && $a[$keys[$i]]==$a[$keys[$i+1]]){
            $subArray[$keys[$i+1]]=$a[$keys[$i+1]];
            $i++;
      }
      $packedArray[]=$subArray;
      unset($subArray);
   }
   return $packedArray;
}

//Tests
$b=array(1,2,2,3,4,5,5,5,6,7);
$c=array(array('0'=>1), array('1'=>2,'2'=>2), array('3'=>3), array('4'=>4), array('5'=>5,'6'=>5,'7'=>5), array('8'=>6), array('9'=>7));
assert(packArray($b)==$c);
$d=array('apple'=>'juice', 'banana'=>'juice', 'prune'=>'juice', 'steak'=>'pie', 'chicken'=>'pie');
$e=array(array('apple'=>'juice', 'banana'=>'juice', 'prune'=>'juice'), array('steak'=>'pie', 'chicken'=>'pie'));
assert(packArray($d)==$e);
?>
