<?php
$page = $_GET['page'];

function route($page){
    if($page = 'Crocodile'){
        require 'view/croco.php';
    }
    else if($page = 'Elephant'){
        require 'view/elephant.php';
    }else if($page = 'Impala'){
        require 'view/impala.php';
    }else if($page = 'Lion'){
        require 'view/lion.php';
    }else if($page = 'Tigre'){
        require 'view/tigre.php';
    }
}

?>