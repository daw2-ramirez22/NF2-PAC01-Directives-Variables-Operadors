<?php
session_start();
//Check username and password information
if ($_SESSION["authuser"]!= 0){
    echo "lo siento no tienes no tienes permisose";
    exit();     
}
?>

<HTML>
<HEAD>
<TITLE>pag2</TITLE>
</HEAD>
<BODY>


<?php 
echo "el valor de la cookie es : ";
echo $_COOKIE["username"];
echo "<br/>";
echo "hola  ";
echo $_GET["persona"]; 
?>

<?php
echo "<br/>";
echo "<br/>";
echo "Estas son las sesiones </br> ";
echo "<br/>";
echo "1r SESSION </br> ";
echo "eyy, ";
echo $_SESSION["username"];
echo "<br/>";
echo "tu peli favorita es torrente " ;
?>

<?php
echo "<br/>";
echo "<br/>";
echo "2n SESSION </br> ";
echo "El pana ";
echo $_SESSION["username"];
echo "<br/>";
echo "tu peli favorita es Ready Player One";
?>

<?php
echo "<br/>";
echo "<br/>";
echo "3r SESSION </br> ";
echo "Que tal ";
echo $_SESSION["username"];
echo "<br/>";
echo "tu peli favorita es Terminator";
echo "<br/>";
?>

<?php
echo "<br/>";
echo "EL NOMBRE";
echo "<br/>";

$nombre = $_POST ["nombre"] ?? "no has introducido datos";
echo $nombre;

echo "<br/>";
echo "EL APELLIDO";
echo "<br/>";

$apellido = $_POST ["apellido"] ?? "no has introducido datos";
echo $apellido;
echo "<br/>";

echo "EL SEGUNDO APELLIDO";
echo "<br/>";
$sapellido = $_POST ["apellido2"] ?? "no has introducido datos";
echo $sapellido;
echo "<br/>";
?>


<?php
echo "Este mes tiene ";
date_default_timezone_set('Europe/Madrid');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '29 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }

echo " dias";
?>


</BODY>
</HTML>