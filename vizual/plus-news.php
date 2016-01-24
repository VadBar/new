<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>!DOCTYPE</title>
    <meta charset="utf-8">
    <link href = "style.css" rel = "stylesheet">
</head>
<body>
<div id ="windows">
    <div id="menu">
        <ul>
            <li><a href="#"><h2>Регистрация</h2></a></li>
            <li><a href="galary.php"><h2>Галерея</h2></a></li>
            <li><a href="news.php"><h2>Новости</h2></a></li>
            <li><a href="../models/exit-admin.php"><h2>Выход</h2></a></li>
        </ul>
    </div>
    <div id="plus">
        <h1>Добавить новость</h1>
     <form action ="http://localhost/new/conteyner/plus-news.php" method = "POST" enctype ="multipart/form-data" id ="new-form">
         <lable for = "new-image">Прикрепить изображение</lable>
         <br>
         <input type="file" name = "image"id = "new-image">
         <br>
         <lable for ="header">Заголовок к новости</lable>
         <br>
         <input type="text" name = "header" id ="header">
         <br>
         <label for = "padding" class = "lable">Статья</label>
         <br>
         <textarea name ="padding" id="padding" cols = "40" rows ="5"></textarea>
         <input type ="submit" value ="Сохранить">
         <input type ="reset" value ="Очистить">
     </form>
        <?php
        if(!empty($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
    </div>
</div>
</body>
</html>