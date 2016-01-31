<?php
require_once __DIR__ . '/../models/mode.php';
require_once __DIR__ .'/../function/avtoriz-admin.php';
class Startcontroler{
    public function actionBegin(){
        $ifuser = ifuser();
        require_once __DIR__ .'/../vizual/start.php';
    }
}