<div class="container">
    <div class="row">
        <div class="col-md-12">
<?php
$page = $_GET['page'];
if(isset($page)){
    var_dump($_GET['page']);
}
    if($page === 'Crocodile'){
        require 'view/croco.php';
    }
    else if($page === 'Elephant'){
        require 'view/elephant.php';
    }else if($page === 'Impala'){
        require 'view/impala.php';
    }else if($page === 'Lion'){
        require 'view/lion.php';
    }else if($page === 'Tigre'){
        require 'view/tigre.php';
    }
?>
            </div>
    </div>
</div>

