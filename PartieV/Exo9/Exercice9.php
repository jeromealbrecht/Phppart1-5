<?php

// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

$tab = array('02' => 'Aisne', '80' => 'Somme', '60' => 'Oise', '59' => 'Nord', '62' => 'NPDC');

foreach($tab as $number => $department){
    echo "<p> $number = $department </p>";
}
?>