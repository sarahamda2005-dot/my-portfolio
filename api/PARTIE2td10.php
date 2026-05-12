<?php 
$etudiants = [ 
    ["nom" => "Ali", "note" => 14], 
    ["nom" => "Sara", "note" => 16], 
    ["nom" => "Yassine", "note" => 12] 
]; 
 
foreach ($etudiants as $etudiant) { 
    echo $etudiant["nom"] . " : " . $etudiant["note"] . "<br>"; 
} 
?>