<?php 
$notes = [12, 14, 16, 18]; 
$somme = 0; 
foreach ($notes as $note) { 
$somme += $note; 
} 
$moyenne = $somme / count($notes); 
echo "Moyenne = " . $moyenne; 
?>