<?php
function array_flat($input) {
  $output = array();
  if (is_array($input)) {
    foreach ($input as $element) {
      $output = array_merge($output, array_flat($element));
    }
  }
  else { 
    $output[] = $input; 
  }
  return $output;
}
$b=array(1,2,array(3,array(4)),array(5,6),7);
$flat_array = array_flat($b);
var_dump($flat_array);
?>
