<?php
session_start();
include '../conteyner/conteyner.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>!DOCTYPE</title>
    <meta charset="utf-8">
    <link href = "style.css" rel = "stylesheet">
  </head>
  <body>
     <div id= "windows">
         <div id="top">
             <a href ="index.php"><h1>Добавить изображение</h1></a>
         </div>
         <div id="center">

         </div>
         <div>
             <?php foreach($items as $item): ?>
                 <a href = "http://localhost/new/vizual/galars.php"><img src = " <?php echo $item['puth']; ?>" title = "<?php echo $item['title']; ?>" class = "image"></a>
             <?php endforeach; ?>
         </div>
     </div>
  </body>
</html>