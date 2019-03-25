<?php
$_POST['civilite'];
$_POST['nom'];
$_POST['prenom'];
$_POST['fichier'];
$fichier = $_FILES['fichier']['name'];
$nomfichier = strstr($fichier, '.', true);
$extfichier = strstr($fichier, '.');
$DisplayForm = true;
if(isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom'])){
    $DisplayForm = false;
    if($extfichier!= '.pdf'){
        echo 'Il ne s\'agit pas d\'un fichier pdf! ';
        }
    else {
        echo 'Il s\'agit bien d\'un fichier pdf! ';
    }
    echo 'Bonjour '.$_POST['civilite'].'.'.$_POST['nom'].' '.$_POST['prenom'].'! Le fichier envoyé est '.$_FILES['fichier']['name'].', il est de type '.$_FILES['fichier']['type'].'!';
  
}

if($DisplayForm){


?>

<!DOCTYPE HTML>
<html>
    <body>

        <form name="inscription" method="post" action="index.php" id='form' enctype ="multipart/form-data">
            <select name="civilite" size="1">
            <option name = 'civilite1'>Mme</option>
            <option name = 'civilite2'>Mr</option>
            </select>
            Entrez votre nom : <input type="text" name="nom"/> <br/>
            Entrez votre prénom : <input type="text" name="prenom"/><br/>
            <input type="file" name="fichier"/>
            <input type="submit" name="valider" value="OK"/>
        </form>
    <?php    
}

    ?>
    </body>
</html>