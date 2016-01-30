<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>!DOCTYPE</title>
    <meta charset="utf-8">
    <link href = "http://new/vizual/style.css" rel = "stylesheet">
</head>
<body>
<div id ="windows">
    <h1>Добавить изображение</h1>
        <form action = "http://new/index.php?cntr=Image&act=Content" method = "POST" enctype ="multipart/form-data" id = "putfoto">
            <table id="table">
                <tr>
                    <th><label for = "image">Изображение</label></th>
                    <td> <input type ="file" id = "image" name = "image"></td>
                </tr>
                <tr>
                    <th><label for = "name">Название</label></th>
                    <td> <input type ="text" id = "image" name = "title"></td>
                </tr>
                <tr>
                    <td><input type = "submit" id="submit" value = "Сохранить изображение"></td>
                    <td><a href = "http://new/index.php?cntr=Image&act=Galary">Выход</a></td>
                </tr>
            </table>
        </form>
        <?php
        if(!empty($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
</div>
</body>
</html>