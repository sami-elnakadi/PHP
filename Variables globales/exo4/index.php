<?php
if(isset($_POST['login']) and isset($_POST['mdp'])){
setcookie("login", $_POST['login']);
setcookie("motdepasse", $_POST['mdp']);
}
?>

<!DOCTYPE HTML>
<html>
    <body>
        <form name="inscription" method="post" action="cookie.php">
            Entrez votre login : <input type="text" name="login"/> <br/>
            Entrez votre mot de passe : <input type="text" name="mdp"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
    </body>
</html>