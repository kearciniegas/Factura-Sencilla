<center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body background="k.gif" text="RED" >
<FONT FACE="impact" SIZE=6 COLOR="RED">
<?php 
$va=$_POST['val'];
$va1=$_POST['val1'];
$va2=$_POST['val2'];
$va3=$_POST['val3'];
$va4=$_POST['val4'];
$can=$_POST['cant'];
$can1=$_POST['cant1'];
$can2=$_POST['cant2'];
$can3=$_POST['cant3'];
$can4=$_POST['cant4'];
$nomb=$_POST['nom'];
$r1=($va1*$can1);
$r2=($va2*$can2);
$r3=($va3*$can3);
$r4=($va4*$can4);
$r5=($va*$can);
$r=($r5+$r1+$r2+$r3+$r4)
echo "El cliente : ".$nomb." Tiene que pagar un valor de ".$r;
echo "# Factura" >> README.md
?>