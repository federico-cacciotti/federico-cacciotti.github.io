<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <title>Intervallometro</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    
    <div id="titolo">
        <h1>Intervallometer</h1>
        <p></p>
    </div>
    
    <div id="indice"><?php include("../include/lista_progetti.html"); ?></div>
    
    <div id="contenuto">
        <div class="argomento">
            <h1>What's a timelapse?</h1>
            <p>Timelapse is an interesting photography tecnique. It consist of executing some photos every preset time intervall and then create a video sequence with the speeding effect.</p>
        </div>
        <div class="argomento">
            <h1>The project</h1>
            <p>If your camera don't have this setting, you need an external hardware that can take photos automatically (only if your camera have the connector :) ). At the first time I flashed a custom firmware called Magic Lantern on my Canon EOS 600D but the battery ran out of energy very quickly, so I decided to build an external intervallometer.</p>
            <p>The project is based on an ATmega328P at 8MHz connected to a shift register that drive three seven segments display. The processor take in input the potentiometer value or rather the time intervall between two consecutive shots. Also there is a start button for initialize timelapse and, if pressed during this one, show the number of shots on the display.</p>
        </div>
        
        <div class="argomento">
        <h1>Some photos</h1>
            <p><img src="images/inter0.jpg" width="45%">
               <img src="images/inter1.jpg" width="45%">
               <img src="images/inter2.jpg" width="95%"></p>
        </div>
        
        <div class="argomento">
        <h1>The code</h1>
            <p>Click <a href="codice_intervallometro.php">here</a> to view code.</p>
        </div>
    </div>
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>