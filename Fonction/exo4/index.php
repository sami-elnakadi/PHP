<?php
function egalite(){
    $nbr1 = 25;
    $nbr2 = 60;
    
    if($nbr1>$nbr2){
        echo 'Le premier nombre est plus grand';
    }
    else if($nbr1<$nbr2){
        echo 'Le premier nombre est plus petit';
    }
    else if($nbr1=$nbr2){
        echo 'Les deux nombres sont identiques';
    }
}
egalite();
?>