<!DOCTYPE html>
<html lang="pt">
<head>
    <script src="js/jquery-3.3.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/estilo.css" />
    <title>Document</title>
</head>
<body id="ascent">
    
   <div id=background_ascent>

    <div class=marcacoes>


    <?php  for($i=1; $i <=26 ; $i++){   ?>
      
        <img id="mc<?php echo $i ?>" src="img/marca-removebg-preview.png" border="0" />
       

<?php } ?>

    </div>

    <?php  for($i=1; $i <=30 ; $i++){   ?>
   <div class = "posicao">

    <img id="po<?php echo $i ?>" src="img/posicao.png" border="0" />
    <?php } ?>
   </div>

   </div>
 <div>
        <button id="main_menu">Menu</button>
    </div>

    <script src="js/scripts.js"></script>
</body>
</html>