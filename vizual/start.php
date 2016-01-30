<!DOCTYPE html>
<html>
<head>
    <title>!DOCTYPE</title>
    <meta charset="utf-8">
    <link href = "http://new/vizual/style.css" rel = "stylesheet">
</head>
<body>
<div id ="windows">
    <div id="menu">
        <?php
        if(empty($ifuser)){
            echo '
     <ul>
         <li><a href="#"><h2>Регистрация</h2></a></li>
         <li><a href="http://new/index.php?cntr=Image&act=Galary"><h2>Галерея</h2></a></li>
        <li><a href="http://new/index.php?cntr=Newsed&act=All"><h2>Новости</h2></a></li>
    </ul>
        <form action = "#" method="POST" id = "formeth">
            <table id = "table">
                <tr>
                    <th><lable for ="login">Логин</lable></th>
                    <td><input type = "text" name = "login"></td>
                </tr>
                <br>
                <tr>
                    <th><lable for = "password">Пароль</lable></th>
                    <td><input type = "password" name ="password"></td>
                </tr>
                <br>
                <tr>
                    <th><lable for ="checkbox">Запомнить меня?</lable></th>
                    <td><input type = "checkbox" name = "checkbox" value = "id1"></td>
                </tr>
                <br>
                <tr>
                    <th><input type ="submit" value = "Авторизироваться"></th>
                </tr>
            </table>
        </form>';
        }else{
            echo '
    <ul>
        <li><a href="#"><h2>Регистрация</h2></a></li>
        <li><a href="http://new/index.php?cntr=Image&act=Galary"><h2>Галерея</h2></a></li>
        <li><a href="http://new/index.php?cntr=Newsed&act=All"><h2>Новости</h2></a></li>
        <li><a href="../conteyner/exit-admin.php"><h2>Выход</h2></a></li>
    </ul>';
        }
        ?>
    </div>
</div>
</body>
</html>
