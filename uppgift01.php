<?php 
header(“Content-type: text /html; charset=utf-8); 
if(empty($_GET[‘namn’])){
   echo ‘<h1>Välkommen!h1>’;
 } 
else{ $namn=filter_input(Input_Get, ‘namn’); 
    echo ‘<h1>Välkommen {$namn}!</h1’; 
    echo ‘<p>Namnet $namn innehåller ‘, strlen($namn), ‘ tecken.<p>; 
}
