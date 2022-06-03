<?php
session_start();

if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user']) ){
    include('./views/lista.php');
}else{
    include('./views/login.php');
}

if(isset($_GET['p'])){
    switch ($_GET['p']) {
        case 'login':
            include('./views/login.php');
            break;
        case '':
            include('./views/login.php');
            break;
        case 'registro':
            include('./views/registro.php');
        default:
            include('./views/login.php');
            break;
    }
}
