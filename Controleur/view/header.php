 
 <header>

        <nav class="col-md-12 navbar">

<div class="navbar-collapse" id="navbarSupportedContent1">
  
<?php

$menu = array('Crocodile','Elephant','Impala','Lion', 'Tigre');
echo '<ul>'
?>

<?php
foreach($menu as $val){
    echo '<li><a href="http://localhost/PHP/Controleur/index.php?page='.$val.'">'.$val.'</a></li>';
}
?>
<?php
echo '</ul>';
?>
    </div> 
</nav>
</header>
