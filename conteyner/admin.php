<?php
require __DIR__ . '/../function/avtoriz-admin.php';

if(!empty($_POST)){
    $login = $_POST['login'];
    $password = $_POST['password'];
    if(login(TRUE)){
        if(password(TRUE)){
            if(clones(TRUE)){
              setcookie('admin',$login,time()+86400,'/');
                header('Location:http://localhost/new/vizual/start.php');
                exit;
            }
        }
    }
}
?>