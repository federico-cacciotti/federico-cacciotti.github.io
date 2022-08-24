<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <script src="Chart.js-master/Chart.js"></script>
  <title>Muons detector</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    
    <div id="titolo">
        <h1>Open-source muons detector</h1>
        <p></p>
    </div>
    
    <div id="indice"><?php include("../include/lista_progetti.html"); ?></div>
    
    <div id="contenuto">
        <div class="argomento">
            <h1>Open-source muons detector</h1>
            <p>This is a project I made for a national contest about electronic in Napoli on May 30th 2015.</p><p>The device works thanks to the use of Geiger-Muller tubes powered from a step-up converter. The device core is (obviously) an Arduino UNO, that allows to store the events and builds frequences and probability graphs to study the Cosmic Backgroud Radiation. The frame is 3D printed. Here's a pic:</p>
            <p><img src="images/rivelatore_finito.jpg" width="55%"></p>
        </div>
        <div class="argomento">
            <h1>Collected data</h1>
            <p>This device helped me to build graphs and calculate how the target is frequently passed through by muons.</p>
            <p><canvas id="grafico" width="750" height="270"></canvas>
    <script>
        
        var data = {
            
            labels: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88],
            
            datasets:[
            {
                label: "Muons",
                fillColor: "rgba(100, 100, 0, 0.2)",
                strokeColor: "rgba(205,99,151,1)",
                pointColor: "rgba(205,99,151,1)",
                data: [18,29,23,28,36,34,27,26,22,28,22,34,21,17,34,29,24,28,19,19,26,37,25,27,29,26,26,16,30,25,35,23,23,24,36,30,18,25,27,28,24,22,29,22,23,32,23,30,26,21,34,22,29,28,30,26,18,22,24,26,28,24,33,24,22,30,30,19,38,23,23,25,18,32,23,30,31,30,34,18,26,17,26,34,23,34,24,22]
            }]
             };
        var ctx = document.getElementById("grafico").getContext("2d");
        var nuovoGrafico = new Chart(ctx).Line(data);
    </script></p>
        </div>
        <div class="argomento">
            <h1>Live data</h1>
            <p>Recently (February 2016) I updated this device implementing an internet connection to store data on a remote server who allow me to track the events in real time. Anytime, everywhere.</p>
            <p><iframe width="750" height="270" style="border: 1px solid #cccccc;" src="http://api.thingspeak.com/channels/88066/charts/1?width=750&height=270&results=144&dynamic=true" ></iframe>
            </br><a href="livedata.php">Here</a> you can see an interactive live data graph.
            </p>
        </div>
        <!--
        <div class="argomento">
            <h1>Schematic</h1>
            <p>The main power supply:</p>
            <p><img src="images/power_supply.png" width="60%"></p>
            <p>The secondary power supply (high voltage):</p>
            <p><img src="images/high_voltage_supply.png" width="100%"></p>
            <p>Microcontroller module:</p>
            <p><img src="images/MCU.png" width="100%"></p>
        </div>
        <div class="argomento">
            <h1>Software</h1>
            <p>The code was written with Arduino IDE, tested on ATmega328p.</p>
            <p><a href="codice_rivelatore.php">View code</a></p>
        </div> -->
            
        <div class="argomento">
            <h1>Circuit test</h1>
            <p>The video below show you the circuit assembly timelapse. A muon, travelling with a relativistic speed (0,998c), seems that it cross simultaneously the two Geiger tubes generating two shorts electric peaks (LEDs on the right). After, a simple circuit, executes the AND logic operation on the two peaks. (LED on the left).</p>
            <p><iframe width="560" height="315" src="https://www.youtube.com/embed/mYWRWqJqSf8" frameborder="0" allowfullscreen></iframe></p>
        </div>
    </div>
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>