<?php
function mysqlconnect()
{
    $start = mysql_connect('localhost','root','');
    mysql_select_db('test');
}

function sqlput($lans)
{
    mysqlconnect();
    mysql_query($lans);
}

/**
 * @param $res
 * @return array
 */
function mysqlquery($res)
{
    mysqlconnect();
    $red = mysql_query($res);
    $array = [];
    while (false !== $row = mysql_fetch_assoc($red)){
        array_push($array,$row);
    }
    return $array;
}

function mysqlnews($resed){
    mysqlconnect();
    $red = mysql_query($resed);
    $row = mysql_fetch_array($red);
    return $row;
}