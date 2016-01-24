<?php
    setcookie('admin','',time()-86400,'/');
    header('Location:http://localhost/new/vizual/start.php');
    exit;
?>