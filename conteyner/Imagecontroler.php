<?php
require_once __DIR__ . '/../models/mode.php';
require_once __DIR__ .'/../function/avtoriz-admin.php';
class Imagecontroler{
    public function actionGalary(){
        $ifuser = ifuser();
        $items = News::exitfile();
        require_once __DIR__ .'/../vizual/galary.php';
    }
    public function actionPutimage(){
        $ifuser = ifuser();
        require __DIR__ . '/../vizual/index.php';
    }
    public function actionContent(){
        require __DIR__ .'/../conteyner/content.php';
    }
}