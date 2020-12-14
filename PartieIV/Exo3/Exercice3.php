<?php

 // faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines.

 function chainz($chaine1, $chaine2){
    return $chaine1 . $chaine2;
 }

 ?>

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?= chainz ('coucou' , ' c\'est moi'); ?>
 </body>
 </html>