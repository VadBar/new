<?php
session_start();
require(__DIR__ . '/../function/function.php');
if(!empty($_POST)){
    $data = [];
    if(!empty($_POST['title'])){
        $data['title'] = $_POST['title'];
        if(!empty($_FILES)){
            $res = file_upload($_FILES);
            if(false !== $res){
                $data['image'] = $res;
                }else{
                    $_SESSION['error'] = 'Изображение не соответствует нужным параметрам';
                    header('Location:http://new/index.php?cntr=Image&act=Putimage');
                    exit;
                }
            }
        }else{
            $_SESSION['error'] = 'Изображение не выбрано';
            header('Location:http://new/index.php?cntr=Image&act=Putimage');
            exit;
        }
    }else{
        $_SESSION['error'] = 'Введите название';
        header('Location:http://new/index.php?cntr=Image&act=Putimage');
        exit;
    }
    if(isset($data['title']) && isset($data['image'])) {
        News::putfile($data);
        $_SESSION['error']= 'Файл добавлен!';
        header('Location:http://new/index.php?cntr=Image&act=Putimage');
        exit;
    }
?>