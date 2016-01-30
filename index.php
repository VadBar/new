<?php

if(isset($_COOKIE['user'])){
}else{
    setcookie('user','start',time()+86400);
}

$cntr = isset($_GET['cntr']) ? $_GET['cntr'] : 'Start';
$act = isset($_GET['act']) ? $_GET['act'] : 'Begin';
$controlerclassname = $cntr .'controler.php';
require_once __DIR__ .'/conteyner/'.$controlerclassname;
$controler = new $cntr;
$method = 'action'.$act;
$controler->$method();