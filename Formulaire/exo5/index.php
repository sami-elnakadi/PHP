<?php
$_POST['civilite'];
$_POST['nom'];
$_POST['prenom'];

echo 'Bonjour '.$_POST['civilite'].'.'.$_POST['nom'].' '.$_POST['prenom'].'!';
?>

<!DOCTYPE HTML>
<html>
    <body>

        <form name="inscription" method="post" action="index.php">
            <select name="civilite" size="1">
            <option name = 'civilite1'>Mme</option>
            <option name = 'civilite2'>Mr</option>
            </select>
            Entrez votre nom : <input type="text" name="nom"/> <br/>
            Entrez votre prénom : <input type="text" name="prenom"/><br/>
            <input type="submit" name="valider" value="OK"/>
        </form>

    </body>
</html>