<?php
session_start();
setcookie("username","cris",time()+60);
$_SESSION["username"]="frederik";
$_SESSION["authuser"]=0;
?>
<HTML>
<HEAD>
<TITLE>pag1</TITLE>
</HEAD>
<BODY>

<?php
$a=urlencode("cristian ·&/$%");
?>

<a href="pag2.php?persona=
<?php
echo $a;
?>
"> enlace a la otra pagina</a>

<form method="post" action="pag2.php?persona=$a">
   <p>Dime tu nombre: 
    <input type="text" name="nombre"/>
   </p>
   <p>Dime tu apellido: 
    <input type="text" name="apellido"/>
   </p>
   <p>Dime tu segundo apellido: 
    <input type="text" name="apellido2"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
 </form>










</BODY>	
</HTML>