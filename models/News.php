<?php
class  News
{
public $id;
public $header;
public $padding;
public $image;
    public static function article_put($article)
    {
        $db=new DBcontroler();
        $lans = "
    INSERT INTO news
    (header,padding,image)
    VALUES ('". $article['header'] ."','". $article['padding'] ."','". $article['image'] ."')
    ";
        $db->sqlput($lans);
    }
    public static function article_two_put($article)
    {
        $db=new DBcontroler();
        $lans = "
        INSERT INTO news
        (header,padding)
        VALUES ('".$article['header']."','".$article['padding']."')
        ";
        $db->sqlput($lans);
    }
    public static function putfile($data)
    {
        $db=new DBcontroler();
        $lans = "
        INSERT INTO image
        (puth,title)
        VALUES ('" . $data['image'] . "','" . $data['title'] . "')
        ";
        $db->sqlput($lans);
    }
    public static function exitfile()
    {
        $db=new DBcontroler();
        $resed = 'SELECT * FROM image';
        return $db->queryAll($resed);
    }
    public static function article_exit(){
        $db=new DBcontroler();
        $resed = 'SELECT header,id FROM news';
        return $db->queryAll($resed,'News');
    }
    public static function news_exit($id)
    {
        $db=new DBcontroler();
        $resed = "SELECT * FROM news WHERE id='".$id."'";
        return $db->queryOne($resed,'News');
    }
}