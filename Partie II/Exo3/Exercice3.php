<?php

//Créer deux variables age et gender. La variable gender peut prendre comme valeur :
//Homme
//Femme

//En fonction de l'âge et du genre afficher la phrase correspondante :
//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeure
//Vous êtes une femme et vous êtes mineur 

$age = 18;

// ucfirst va mettre en majuscule, strtolower va mettre en minuscule
$gender = strtolower('femmE');


if ($age >=18 && $gender == 'femme'){
echo 'Vous êtes une femme et vous êtes majeure';
} else if ($age <=18 && $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes mineure';

} else if ($age >=18 && $gender == 'homme'){
    echo 'Vous êtes un homme et vous êtes majeur' ;

} else if ($age < 18 && $gender == 'homme'){
    echo 'Vous êtes un homme et vous êtes mineur' ;
}