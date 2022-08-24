<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <title>4 bits adder</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    
    <div id="titolo">
        <h1>4 bits adder</h1>
        <p></p>
    </div>
    
    <div id="indice"><?php include("../include/lista_progetti.html"); ?></div>
    
    <div id="contenuto">
        <div class="argomento">
            <h1>What is that?</h1>
            <p>The following device is a small calculator that executes only additions between two 4-bit numbers (from 0 to 15 in decimal). The circuit is composed mainly by resistors and transistors, everything is powered by a 9 volt battery. There are also some switch and a led array that represent the addends and the sum respectively.</p>
        </div>
        <div class="argomento">
            <h1>How it works?</h1>
            <p>The addition between two bits is possible thanks to the following logic circuit, called "Full adder".</p>
            <p><img src="images/fulladder_sc.png" width="45%" style="box-shadow: 0px 0px 0px;">
               <img src="images/fulladder_porte.jpg" width="45%"></p>
            <p>I used 5 full adder modules in series.</p>
        </div>
        <div class="argomento">
            <h1>Shematic</h1>
            <p>Transistors I used are BC547 NPN with a 10k resistors between collectors and emitters and 1k resistors connected to each bases. For more information <a href="http://www.waitingforfriday.com/index.php/4-Bit_Computer" target="_blank">click here</a>.</p>
        </div>
        <div class="argomento">
            <h1>Some photos</h1>
            <p><img src="images/fulladder_test.jpg" width="45%">
               <img src="images/fulladder_2.jpg" width="45%">
               <img src="images/fulladder_1.jpg" width="95%"></p>
        </div>
    </div>
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>