<?php
if ($_GET['dia']){
    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $ano = $_GET['ano'];
}

function somatorio($num){
    $total = 0;
    
   for ($i = $num; $i > 0; $i--){
       $total = $total + $i;
   }
   return $total;
}

function safadao($dia, $mes, $ano){
    $safadeza = somatorio($mes)+($ano/100)*(50-$dia);
    $anjo = 100 - $safadeza;
    return "Você é $anjo % anjo e $safadeza % de vagabundo";  
}

include 'index.php';