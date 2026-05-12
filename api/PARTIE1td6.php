<?php 
$tab = [10, 20, 30, 40]; 
$index = array_search(30, $tab); 
unset($tab[$index]); 
print_r($tab); 
?>