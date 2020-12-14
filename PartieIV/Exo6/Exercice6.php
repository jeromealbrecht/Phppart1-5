<?php

//Faire une fonction qui prend trois paramètres : 
//le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
//Bonjour + nom + prénom + , tu as + age + ans.

function chain($a, $b, $c){

    echo '<p>' . 'Bonjour ' .$a. $b. ', tu as ' . $c . ' ans.' . '</p>';
}

chain('Albrecht ', 'Jérôme', '35');

?>