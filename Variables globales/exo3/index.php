<?php
setcookie("login", $_POST['login']);
setcookie("motdepasse", $_POST['mdp']);

echo $_COOKIE["login"].'<br>';
echo $_COOKIE["motdepasse"];
?>

<!DOCTYPE HTML>
<html>
    <body>
        <form name="inscription" method="post" action="index.php">
            Entrez votre login : <input type="text" name="login"/> <br/>
            Entrez votre mot de passe : <input type="text" name="mdp"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>
    </body>
</html>