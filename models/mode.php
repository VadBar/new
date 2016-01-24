<?php
require_once(__DIR__ . '/../function/mycql.php');
session_start();
function putfile($data)
{
    mysqlconnect();
    $lans = "
        INSERT INTO image
        (puth,title)
        VALUES ('" . $data['image'] . "','" . $data['title'] . "')
        ";
    sqlput($lans);
}

function exitfile()
{
    $res = 'SELECT * FROM image';
    return mysqlquery($res);
}

function article_exit(){
    $res = 'SELECT header,id FROM news';
      return mysqlquery($res);
}
function news_exit()
{
    $resed = "SELECT * FROM news WHERE id='".$_GET['id']."'";
    return mysqlnews($resed);
}
?>