<?php
session_start();
require __DIR__ . '/../function/news-plus.php';

$article['image'] = $_POST['image'];
if(isset($_POST)){
   $article = [];
   if(!empty($_POST['header'])){
       $article['header'] =$_POST['header'];
       if(!empty($_POST['padding'])){
           $article['padding'] =$_POST['padding'];
           if(headers($article)){
               if(padding($article)){
                   if(!empty($_FILES)){
                       $res = image($_FILES);
                       if(false !== $res){
                           $article['image']= $res;
                           if(isset($article['header']) && isset($article['padding']) && isset($article['image'])){
                               News::article_put($article);
                               header('Location:http://new/index.php?cntr=Newsed&act=All');
                               exit;
                           }
                   }else{
                           if (isset($article['header']) && isset($article['padding'])) {
                               News::article_two_put($article);
                               header('Location:http://new/index.php?cntr=Newsed&act=All');
                               exit;
                           }
                       }
               }else{
                   $_SESSION['error'] = 'Статья не написана!';
                   header('Location:http://new/index.php?cntr=Newsed&act=plusNews');
                   exit;
               }
           }else{
               $_SESSION['error'] = 'Заголовок не написан!';
               header('Location:http://new/index.php?cntr=Newsed&act=plusNews');
               exit;
           }
       }else{
           $_SESSION['error'] = 'Статья не написана!';
           header('Location:http://new/index.php?cntr=Newsed&act=plusNews');
           exit;
       }
   }else{
       $_SESSION['error'] = 'Заголовок не написан!';
       header('Location:http://new/index.php?cntr=Newsed&act=plusNews');
       exit;
   }

}else{
    $_SESSION['error'] = 'Не заполнены необходимые строки!';
    header('Location:http://new/index.php?cntr=Newsed&act=plusNews');
    exit;
}
}