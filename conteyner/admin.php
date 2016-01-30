<?php
if(!empty($_POST)){
    $login = $_POST['login'];
    $password = $_POST['password'];
    if(login(TRUE)){
        if(password(TRUE)){
            if(clones(TRUE)){
              setcookie('admin',$login,time()+86400,'/');
                header('Location:http://new/index.php');
                exit;
            }
        }
    }
}
?>