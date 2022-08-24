<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <title>Drone</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    
    <div id="titolo">
        <h1>3D printed quadcopter</h1>
        <p></p>
    </div>
    
    <div id="indice"><?php include("../include/lista_progetti.html"); ?></div>
    
    <div id="contenuto">
        <div class="argomento">
            <h1>Multiwii drone</h1>
            <p>During the summer of 2014 I decided to build a quadcopter controlled by an Arduino and a software called Multiwii. The first build attempt was disheartening: a recycled 4ch radiocontrol (of my old RC helicopter), a 6 axis gyroscope+accelerometer, an Arduino Mini, all mounted on an improvised aluminum frame (very, very unstable!). After thousand and thousand calibration tests I decided to replace the aluminum frame with a 3D printed frame I designed. Now it is much more stretchy and the calibration is more simpler.</p>
        </div>
        <div class="argomento">
            <h1>Software</h1>
            <p>PID algorythm determines the aircraft stabilization:</p>
            <p><img src="images/P.png" width="12%" style="box-shadow: 0px 0px 0px;"></p>
            <p><img src="images/i.png" width="20%" style="box-shadow: 0px 0px 0px;"></p>
            <p><img src="images/d.png" width="12%" style="box-shadow: 0px 0px 0px;"></p>
        </div>
        <div class="argomento">
            <h1>Before and after</h1>
            <p><img src="images/quadx1.jpg" width="45%">
           <img src="images/quadx2.jpg" width="45%"></p>
        </div>
        </div>
    
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>