<?php
$_GET['nom'];
$_GET['prenom'];

if($_GET['age']){
    echo 'Bonjour '.$_GET['nom'].' '.$_GET['prenom'].' , tu as '.$_GET['age'];
}
else{
    echo 'Age n\' est pas précisé <br>';
    echo 'Bonjour '.$_GET['nom'].' '.$_GET['prenom'];
}
?>