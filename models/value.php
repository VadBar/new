<?php
require __DIR__ . '/../function/mycql.php';
function article_put($article)
{
    mysqlconnect();
    $lans = "
    INSERT INTO news
    (header,padding,image)
    VALUES ('". $article['header'] ."','". $article['padding'] ."','". $article['image'] ."')
    ";
    sqlput($lans);
}
function article_two_put($article)
{
  mysqlconnect();
    $lans = "
        INSERT INTO news
        (header,padding)
        VALUES ('".$article['header']."','".$article['padding']."')
        ";
    sqlput($lans);
}
?>