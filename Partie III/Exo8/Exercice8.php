<?php

// En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
$i=200;


for ($i = 200; $i >= 0; $i = $i - 12) {
    echo"<p>" .$i-- . ' ' . 'Enfin !!!!</p>';
}