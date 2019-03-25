<?php
session_start();

$_SESSION['prenom'] = 'Sami';
$_SESSION['nom'] = 'El Nakadi';
$_SESSION['age'] = 26;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
    <p>
        Tu veux aller sur une autre page ?
    </p>
    <p>
        <a href="user.php">Lien vers user.php</a><br />
    </p>
    </body>
</html>