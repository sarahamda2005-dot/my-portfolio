<?php 
$etudiants = [ 
    ["nom" => "Ali", "note" => 14], 
    ["nom" => "Sara", "note" => 16], 
    ["nom" => "Yassine", "note" => 12] 
]; 
 
$max = 0; 
$meilleur = ""; 
 
foreach ($etudiants as $e) { 
    if ($e["note"] > $max) { 
        $max = $e["note"]; 
        $meilleur = $e["nom"]; 
    } 
} 
 
echo "Meilleur étudiant : " . $meilleur; 
?>