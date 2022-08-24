<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <title>Germanium Radio Detector</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    
    <div id="titolo">
        <h1>Germanium Radio Detector</h1>
        <p></p>
    </div>
    
    <div id="indice"><?php include("../include/lista_progetti.html"); ?></div>
    
    <div id="contenuto">
        <div class="argomento">
            <h1>Project</h1>
            <p>This is one of the first radio ever builded by humans. Originally the main component was a galena diode (lead oxide) that demodulate the electrict signal coming from antenna and transform it in an acustic signal. Now it's used a germanium diode because it does not oxide. This radio has a particularity: if you look the schematic you don't find an usual power supply, it's powered by the electromagnetic wawes it recieves. But there is a problem! This isn't a portable device because it needs a big antenna due to detecting signals and a good ground connection. These device is composed by: a 3D printed variable capacitor, a solenoide, a pair of high inpedence headphones and, obviously, a germanium diode.</p>
        </div>
        <div class="argomento">
            <h1>Some photos</h1>
            <p><img src="images/radio_1.jpg" width="90%"</p>
            <p><img src="images/radio_2.jpg" width="90%"</p>
        </div>
    </div>
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>