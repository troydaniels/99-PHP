<?php
//Run length encoding of an array
//This implementation does not maintain keys from original array
function runLengthEncode(array $a){
   $encodedArray=array();
   $items=count($a);
   $keys=array_keys($a);
   for($i=0; $i<$items; $i++){
      $k=1;                                 //Run counter
      $subArray=array($k=>$a[$keys[$i]]);
      for($j=$i+1; $j<$items; $j++){
         if($a[$keys[$i]]==$a[$keys[$j]]){
            unset($subArray[$k]);
            $subArray[++$k]=$a[$keys[$i]];  //Increment run counter
            $i++;
         }
      }
      $encodedArray[]=$subArray;            //Add run to encoding
      unset($subArray);
   }
   return $encodedArray;
}

//Tests
$b=array(1,2,2,3,4,5,5,5,6,7);
$c=array(array('1'=>'1'), array('2'=>'2'), array('1'=>'3'), array('1'=>'4'), array('3'=>'5'), array('1'=>'6'), array('1'=>'7'));
assert(runLengthEncode($b)==$c);
$d=array('apple'=>'juice', 'banana'=>'juice', 'prune'=>'juice', 'steak'=>'pie', 'chicken'=>'pie');
$e=array(array('3'=>'juice'), array('2'=>'pie'));
assert(runLengthEncode($d)==$e);
?>
