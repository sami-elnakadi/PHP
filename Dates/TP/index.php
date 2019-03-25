<?php
$_POST['mois'];
$_POST['annee'];
$nbJour = date("t", mktime(0, 0, 0, $_POST['mois'], 1, $_POST['annee']));
$jour = date("N", mktime(0, 0, 0, $_POST['mois'], 1, $_POST['annee']));
?>

<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="calendrier.css">
    </head>
    <body>

        <form name="inscription" method="post" action="index.php">
            <select name="mois" size="1">
            <option value = '1'>Janvier</option>
            <option value = '2'>Février</option>
            <option value = '3'>Mars</option>
            <option value = '4'>Avril</option>
            <option value = '5'>Mai</option>
            <option value = '6'>Juin</option>
            <option value = '7'>Juillet</option>
            <option value = '8'>Août</option>
            <option value = '9'>Septembre</option>
            <option value = '10'>Octobre</option>
            <option value = '11'>Novembre</option>
            <option value = '12'>Décembre</option>
            </select>
            <select name="annee" size="1">
            <option value = '1'>2019</option>
            <option value = '2'>2020</option>
            <option value = '3'>2021</option>
            </select>
            <input type="submit" name="valider" value="OK"/>
        </form>

<?php
$jours = array('Lundi  ', 'Mardi  ', 'Mercredi  ', 'Jeudi  ', 'Vendredi  ', 'Samedi  ', 'Dimanche  ');
echo '<table>';
for($a = 0; $a < 7; $a++){
    echo '<th>';
    echo $jours[$a];
    echo '</th>';
}
$b = 1;
    for($i = 0; $i < $nbJour; $i++){
        echo '<tr>';
            for($j=1; $j <= 7; $j++){
                if($b<=$jour){
                    echo '<td> </td>';
                }
                    else{
                        if($b<=$nbJour){
                            echo '<td>';
                            echo $b;    
                            echo '</td>';  
                    }
                }
                $b++;    
            }
        echo '</tr>';         
     }
echo '</table>';
?>
    </body>
</html>