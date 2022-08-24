<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <title>LED cube</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    
    <div id="titolo">
        <h1>LED cube</h1>
        <p></p>
    </div>
    
    <div id="indice"><?php include("../include/lista_progetti.html"); ?></div>
    
    <div id="contenuto">
        <div class="argomento">
            <h1>The structure</h1>
            <p>This crazy device was one of my first project I have made. If I remember correctly, I made it during the 2012 winter. The cube is composed by 216 LEDs, 6 per side, each layer is controlled by a transistor and each column by an output of a 5 shift register in total.</p>
        </div>
        <div class="argomento">
            <h1>Some photos</h1>
            <p><img src="images/cubo_1.jpg" width="45%">
               <img src="images/cubo_2.jpg" width="45%">
               <img src="images/cubo_3.jpg" width="100%"></p>
        </div>
    </div>
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>