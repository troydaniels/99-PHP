<?php
//Eliminate consecutive duplicates of array elements
//This implementaion maintains keys
function compress(array $a){
   $last=NULL;
   $compArray=array();
   foreach($a as $key=>$value){
      if($value!=$last){
         $compArray[$key]=$value;
         $last=$value;
      }
   }
   return $compArray;
}

//Tests
$b=array(1,2,2,3,4,5,5,5,6,7);
assert(compress($b)==array('0'=>1,'1'=>2,'3'=>3,'4'=>4,'5'=>5,'8'=>6,'9'=>7));
$c=array(1,2,1,3,1,4,1,5);
assert(compress($c)==$c);

?>
