<?php
require __DIR__ .'/autoload.php';
if(isset($_COOKIE['user'])){
}else{
    setcookie('user','start',time()+86400);
}

$cntr = isset($_GET['cntr']) ? $_GET['cntr'] : 'Start';
$act = isset($_GET['act']) ? $_GET['act'] : 'Begin';
$controlerclassname = $cntr .'controler';
$controler = new $controlerclassname;
$method = 'action'.$act;
$controler->$method();