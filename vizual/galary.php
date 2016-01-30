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
     <div id= "windows">
         <div id="top">
             <a href ="http://new/index.php?cntr=Image&act=Putimage"><h1>Добавить изображение</h1></a>
         </div>
         <div id="center">

         </div>
         <div>
             <?php foreach($items as $item): ?>
                 <a href = "http://new/vizual/galars.php"><img src = " <?php echo $item->puth; ?>" title = "<?php echo $item->title; ?>" class = "image"></a>
             <?php endforeach; ?>
         </div>
     </div>
  </body>
</html>