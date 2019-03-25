<?php
if(isset($_POST['login']) and isset($_POST['mdp'])){
    setcookie("login", "non");//suffit de remplacer par ce qu'on veut
    setcookie("motdepasse", "oui");
    }
echo 'Le login est '.$_COOKIE["login"].', le mot de passe est '.$_COOKIE["motdepasse"];
?>