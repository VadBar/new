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
    <div id="menu">
        <ul>
            <li><a href="http://new/index.php"><h2>Главная</h2></a></li>
            <li><a href="#"><h2>Регистрация</h2></a></li>
            <li><a href="http://new/index.php?cntr=Image&act=Galary"><h2>Галерея</h2></a></li>
            <li><a href="http://new/index.php?cntr=Newsed&act=One"><h2>Новости</h2></a></li>
        </ul>
    </div>
    <h1><?php echo $newsed->header; ?></h1>
    <img src = "<?php echo $newsed->image; ?>">
    <p><?php echo $newsed->padding; ?></p>
</div>
</body>
</html>

