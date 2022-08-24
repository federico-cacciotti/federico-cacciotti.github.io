<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <script src="Chart.js-master/Chart.js"></script>
  <title>Grafico muoni</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    
    <div id="titolo">
        <h1>Grafico di frequenza muoni</h1>
        <p></p>
    </div>
    <canvas id="grafico" width="1150" height="700"></canvas>
    <script>
        
        var data = {
            
            labels: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88],
            
            datasets:[
            {
                label: "Muoni",
                fillColor: "rgba(100, 100, 0, 0.2)",
                strokeColor: "rgba(205,99,151,1)",
                pointColor: "rgba(205,99,151,1)",
                data: [18,29,23,28,36,34,27,26,22,28,22,34,21,17,34,29,24,28,19,19,26,37,25,27,29,26,26,16,30,25,35,23,23,24,36,30,18,25,27,28,24,22,29,22,23,32,23,30,26,21,34,22,29,28,30,26,18,22,24,26,28,24,33,24,22,30,30,19,38,23,23,25,18,32,23,30,31,30,34,18,26,17,26,34,23,34,24,22]
            }]
            
        };
        var ctx = document.getElementById("grafico").getContext("2d");
        var nuovoGrafico = new Chart(ctx).Line(data);
    </script>
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>