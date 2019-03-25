<?php
if(isset($_POST['login']) and isset($_POST['mdp'])){
    setcookie("login", $_POST['login']);
    setcookie("motdepasse", $_POST['mdp']);
    }
echo 'Le login est '.$_COOKIE["login"].', le mot de passe est '.$_COOKIE["motdepasse"];
?>