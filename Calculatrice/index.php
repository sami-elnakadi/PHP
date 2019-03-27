<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$ope = $_POST['calcul'];
$add = $nombre1 + $nombre2;
$sous = $nombre1 - $nombre2;
$multi = $nombre1 * $nombre2;
$div = $nombre1 / $nombre2;

// 1 Calculatrice en If Else
// if($ope == '1'){
//     echo "<script language='JavaScript'>alert($add)</script>";
// }
// else if($ope == '2'){
//     echo "<script language='JavaScript'>alert($sous)</script>";
// }
// else if($ope == '3'){
//     echo "<script language='JavaScript'>alert($mutli)</script>";
// }
// else if($ope ==  '4'){
//     echo "<script language='JavaScript'>alert($div)</script>";
// }

// 2 SWITCH

// switch ($ope) {
//     case '1':
//         echo $add;
//         break;
//     case '2':
//         echo $sous;
//         break;
//     case '3':
//         echo $multi;
//         break;
//     case '4':
//         echo $div;
//         break;
// }

// 3 Fonction

function calc ($nombre1, $nombre2, $ope){
    if($ope == '1'){
            $res = $nombre1 + $nombre2;
        }
        else if($ope == '2'){
            $res = $nombre1 - $nombre2;
        }
        else if($ope == '3'){
            $res = $nombre1 * $nombre2;
        }
        else if($ope ==  '4'){
            $res = $nombre1 / $nombre2;
        }   
        return $res;  
}

//Erreurs

if($nombre1 == '' || $nombre2 == ''){
    echo "<script language='JavaScript'>alert('Champ vide!')</script>";
}

if($nombre2 == 0 and ($ope =='4')){
    echo "<script language='JavaScript'>alert('Erreur, divison par 0!')</script>";
}
?>  

<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>

        <form name="inscription" method="post" action="index.php">
            Entrez un nombre : <input type="number" name="nombre1" id = "nombre"/> <br/>
            Entrez un nombre : <input type="number" name="nombre2" id = "nombre"/><br/>
            <select name="calcul" size="1">
            <option value = '1'>Addition</option>
            <option value = '2'>Soustraction</option>
            <option value = '3'>Multiplication</option>
            <option value = '4'>Division</option>
            </select>
            <button onclick="document.getElementById('nombre').value = ''">C</button>
            <input type="submit" name="valider" value="OK"/>
            <input type="text" value="<?php echo calc($nombre1, $nombre2, $ope); ?>" />
        </form>
    </body>
</html>