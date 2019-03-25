<?php
$mois = array(
    '0' => 'Janvier',
    '1' => 'Février',
    '2' => 'Mars',
    '3' => 'Avril',
    '4' => 'Mai',
    '5' => 'Juin',
    '6' => 'Juillet',
    '7' => 'Aout',
    '8' => 'Septembre',
    '9' => 'Octobre',
    '10' => 'Novembre',
    '11' => 'Décembre');
for($i = 0; $i<11; $i++){
    $mois[$i];
}
echo $mois[2];
echo ' '.$mois[5].' ';

$mois[7] = 'Août';

var_dump($mois);


?>