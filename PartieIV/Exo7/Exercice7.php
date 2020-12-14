<?php

// Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
// Homme
// Femme  

// La fonction doit renvoyer en fonction des paramètres :

// Vous êtes un homme et vous êtes majeur
// Vous êtes un homme et vous êtes mineur
// Vous êtes une femme et vous êtes majeure
// Vous êtes une femme et vous êtes mineure

// Gérer tous les cas.

function chain($age, $gender){

    if ($age >= 18 && $gender == 'Homme'){

        echo 'Vous êtes un homme et vous êtes majeur.';
    } else if ($age < 18 && $gender == 'Homme'){

        echo 'Vous êtes un homme et vous êtes mineur.';

    } else if  ($age >= 18 && $gender == 'Femme'){

        echo 'Vous êtes une femme et vous êtes majeure.';

    } else if  ($age < 18 && $gender == 'Femme'){

        echo 'Vous êtes une femme et vous êtes mineure.';

    } 
}

chain(18, 'Homme');

?>