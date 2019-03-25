<?php
$prix = 785;
$ristourne = $prix*(30/100);
$newprix = $prix - $ristourne;

echo $prix.' '.$ristourne.' '.$newprix;

?>