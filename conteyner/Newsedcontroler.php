<?php
require_once __DIR__ . '/../models/mode.php';
require_once __DIR__ .'/../function/avtoriz-admin.php';

class Newsed{
    public function actionAll()
    {
        $news = News::article_exit();
        $ifuser = ifuser();
        require __DIR__ . '/../vizual/news.php';
    }
    public function actionOne()
    {
        $id = $_GET['id'];
        $newsed = News::news_exit($id);
        $ifuser = ifuser();
        require __DIR__ . '/../vizual/vizual-news.php';
    }
    public function actionplusNews(){
        require __DIR__ .'/../vizual/plus-news.php';
    }
    public function actioncontentNews(){
        require __DIR__ .'/../conteyner/plus-news.php';
    }
}













?>