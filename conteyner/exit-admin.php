<?php
    setcookie('admin','',time()-86400,'/');
    header('Location:http://new/index.php');
    exit;
?>