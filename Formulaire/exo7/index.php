<?php
$_POST['civilite'];
$_POST['nom'];
$_POST['prenom'];
$_POST['fichier'];
$DisplayForm = true;
if(isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['fichier'])){
    $DisplayForm = false;
    echo 'Bonjour '.$_POST['civilite'].'.'.$_POST['nom'].' '.$_POST['prenom'].'! Le fichier envoyé est '.$_POST['fichier'];
}

if($DisplayForm){


?>

<!DOCTYPE HTML>
<html>
    <body>

        <form name="inscription" method="post" action="index.php" id='form'>
            <select name="civilite" size="1">
            <option name = 'civilite1'>Mme</option>
            <option name = 'civilite2'>Mr</option>
            </select>
            Entrez votre nom : <input type="text" name="nom"/> <br/>
            Entrez votre prénom : <input type="text" name="prenom"/><br/>
            <input type="file" name="fichier" />
            <input type="submit" name="valider" value="OK"/>
        </form>
    <?php    
}

    ?>
    </body>
</html>