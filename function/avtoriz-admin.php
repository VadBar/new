<?php
function login($login)
{
    if(!empty($login) && isset($login)){
        return TRUE;
    }
}

function password($password)
{
    if (!empty($password) && isset($password)) {
        return TRUE;
    }
}
function clones($login)
{
    mysql_connect('localhost','root','');
    mysql_select_db('test');
    $res = 'SELECT * FROM admin';
    $day =  mysql_query($res);
    while(false !== $row = mysql_fetch_array($day)){
        if($_POST['login'] == $row['Login'] && $_POST['password'] == $row['Password']){
            return TRUE;
        }
    }
}

function ifuser(){
    return isset($_COOKIE['admin']);
}
?>