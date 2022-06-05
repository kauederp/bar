<?php
session_start();


include('models/Database.php');
include('models/Login.php');
include('models/Registro.php');

if(isset($_SESSION['id_user'])){
    include('./views/home.php');
}else{


    if(isset($_GET['p'])){


        if($_GET['p'] == 'registro'){
            include('./views/registro.php');
        }elseif($_GET['p'] =='login' || empty($_GET['p'])){
            include('./views/login.php');
        }elseif($_GET['p'] =='home' ){
            include('./views/home.php');
        }elseif($_GET['p'] =='api'){
            include('./api/api.php');
        }else{
            include('./views/404.php');
        }



    }else{
        include('./views/login.php');
    }
}


