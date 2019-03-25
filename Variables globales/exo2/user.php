<?php

session_start();
$_SESSION['nom'];
$_SESSION['prenom'];
$_SESSION['age'];

echo 'Bonjour '.$_SESSION['nom'].' '.$_SESSION['prenom'].', tu as '.$_SESSION['age'].' ans!';
?>  