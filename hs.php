<?php
$age = array("Magd"=>"75", "Millad"=>"69", "Deved"=>"72");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key = " . $x . ", Value = " . $x_value;
  echo "<br>";
  
}
?>