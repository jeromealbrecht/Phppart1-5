<?php 

 
// Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
// Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
// Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
// Les deux nombres sont identiques si les deux nombres sont égaux

function numbers($a, $b){

    if ($a > $b){

        echo "le premier chiffre est plus grand";
    } else if ($b > $a) {
        echo "le deuxieme chiffre est plus petit";
    } else if ($a === $b){
        echo "les deux nombres sont identiques";
    }

}

numbers(4,5);
numbers(5,4);

?>