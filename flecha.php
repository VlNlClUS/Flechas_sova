<!DOCTYPE html>
<html lang="pt">
<head>
    <script src="js/jquery-3.3.1.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="css/estilo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Flecha</title>
</head>
<body>
<div>
    <div class=flecha>
        
        <img id="flechax" src="img/ascent/pos<?php echo $_GET['posicao']; ?>.jpg" border="0" />

    </div>
  
    
    <div id = menu_fecha>
        <button id="main_menu">Menu</button>
        <input type="button" value="Voltar" onClick="history.go(-1)"> 
    </div>
</div>
    <script src="js/scripts.js"></script>
</body>

</html>