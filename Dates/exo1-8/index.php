<?php
echo 'EXO 1<br>';

echo date('d/m/y').'<br>';


echo 'EXO 2 <br>';

echo date('d-m-y').'<br>';


echo 'EXO 3 <br>';

setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
echo strftime('%A %C %B %Y').'<br>';


echo 'EXO 4 <br>';

$t0 = time();
echo $t0.'<br>';
$time = mktime(15, 0, 0, 2, 8, 2016);
echo $time.'<br>';


echo 'EXO 5 <br>';

$t1 = "16-05-2016";
$DifSec = $t0 - strtotime($t1);
$DifJour = floor($DifSec/86400);
echo 'Le nombre jour entre les 2 dates est '.$DifJour.'<br>';

echo 'EXO 6 <br>';

$nbJour = date("t", mktime(0, 0, 0, 2, 1, 2017));
echo 'Nombre de jours de février 2017 est '.$nbJour.'<br>';


echo 'EXO 7 <br>';

$date = new DateTime('now');
$date->modify('+20 day');
echo $date->format('d-m-y').'<br>';


echo 'EXO 8 <br>';

$date = new DateTime('now');
$date->modify('-22 day');
echo $date->format('d-m-y').'<br>';


?>