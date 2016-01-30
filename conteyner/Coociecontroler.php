<?php
require_once __DIR__ . '/../models/mode.php';
require_once __DIR__ .'/../function/avtoriz-admin.php';

class Coocie{
   public function actionexitAdmin(){
        require_once __DIR__ .'/../conteyner/exit-admin.php';
    }
    public function actionstartAdmin(){
        require_once __DIR__ .'/../conteyner/admin.php';
    }
}