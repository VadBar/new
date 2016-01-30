<?php
class DB
{
  public  function __construct()
   {
       mysql_connect('localhost','root','');
       mysql_select_db('test');
   }
    public function queryAll($resed,$class='stdClass')
    {
        $red = mysql_query($resed);
        $array = [];
        while (false !== $row = mysql_fetch_object($red,$class)){
            array_push($array,$row);
        }
        return $array;
    }

    public function queryOne($resed,$class='stdClass'){
       $res=mysql_query($resed);
       $row=mysql_fetch_object($res,$class);
       return $row;
   }
    public function sqlput($lans)
    {
        mysql_query($lans);
    }
}