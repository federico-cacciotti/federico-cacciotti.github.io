<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/stile.css" type="text/css">
  <title>Projects</title>
</head>

<body>
    <div id="menu"><?php include("../include/menu.html"); ?></div>
    <div id="pagina">
    <div id="titolo">
        <h1>Projects</h1>
        <p>This it the list of my projects and devices that I made during years.</p>
    </div>
    
    <div id="indice"><?php include("../include/lista_progetti.html"); ?></div>
    
    <div id="contenuto">
        
        <div class="argomento">
            <h1>Left a comment!</h1>
            <p>In this box you can comment about a project, I will answer you as soon as possible!</p>
        <form name="comment" method="post" action="#">
<table>
    <tr><td><b>Name/e-mail</b>:</td><td><input type="text" maxlength="20" name="user"></td></tr>
    <tr><td><b>Comment</b>:</td><td><textarea style="border-radius: 2px;" name="comment" cols="50" rows="5"></textarea></td></tr>
    <tr><td><input type="submit" value="Invia Commento"></tr></td></table></form>
        
<?php
if(isset($_POST["comment"])){
$connection=mysql_connect("localhost", "craindowl", ""); 
$sel=mysql_select_db("my_craindowl", $connection) or die(mysql_error()); 

$user=mysql_real_escape_string($_POST["user"]); 
$com=mysql_real_escape_string($_POST["comment"]); 
if($user!=="" and $com!==""){
$string="insert into comments(user, comment, date_time) values('$user', '$com', now())"; 
mysql_query($string) or die(mysql_error());
$content="Comment send by $user!\nText: '$com'\nhttp://www.craindowl.altervista.org/progetti/progetti.php/";
//mail("fe.cacciotti@gmail.com", "New comment!", $content, "From: craindowl");
}
else { echo "<p>Compile all the fields!</p>";}}?></div>
        
        
<?php 
$conn=mysql_connect("localhost", "craindowl", "") or die(mysql_error()); 
$sele=mysql_select_db("my_craindowl", $conn) or die(mysql_error()); 
$selezione=mysql_query("select user, comment, date_format(date_time, '%d/%m/%Y alle ore %H:%i:%s') as data from comments order by date_time") or die(mysql_error()); 
/*if(mysql_num_rows($selezione)>0){ 
while($array=mysql_fetch_array($selezione)){ 
$user=$array["user"]; 
$mex=$array["comment"]; 
$ora=$array["data"]; 
echo "<div class='argomento'><form> <h1><i style='font-weight: 200;'>Comment send by</i> $user</h1> <p style='font-size: 11px;'>$ora</p> <p>$mex</p></div>";};}else {echo "<div class='argomento'><h1>There isn't any comment yet.</h1></div>";}?>*/
        
        
        echo "<div class='argomento'><h1>There isn't any comment yet.</h1></div>";?>
        
        
        </div>
    </div>
    <div id="contatti"><?php include("../include/contatti.html"); ?></div>
    <?php include("../include/cookie.html"); ?>
</body>

</html>
</body>

</html>