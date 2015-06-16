<?php
//Function that checks if an array is a palindrome
//As arrays in PHP are implemented as hashes, this function will check that
//the values form a palindrome
function isPalandrome(array $a){
   $values=array_values($a);
   $items=count($a);
   for($i=0; $i<$items; $i++){
      if($values[$i]!=$values[$items-$i-1]){
         return FALSE;
      }
   }
   return TRUE;
}

//Tests
$b=array(1,2,3,4,5);
assert(!isPalandrome($b));
$c=array('fruit'=>'apple','juice'=>'apple');
assert(isPalandrome($c));
$d=array(1,2,3,2,1);
assert(isPalandrome($d));

?>
