<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"><title>FACTURA</title>
</head>
<body>
<center><FONT FACE="impact" SIZE=3 COLOR="red">
<h1>FACTURA</h1>
<form name="Multi1" action="Multi2.php" method="POST" >
<body background="k.gif" text="red" >
<br>
<h2>NOMBRE CLIENTE:</h2>
<br>
<input type="text" name="nom" step="any" value="">
<br>
<h2>DOCUMENTO CLIENTE:</h2>
<br>
<input type="number" name="doc" step="any" value="">
<br>
<br>
<h4>_____________________________________________________________________________________</h4>
<br>
<h2>ITEM: <input type="number" name="ite" step="any" value=""> VALOR: <input type="number" name="val" step="any" value="">  CANTIDAD: <input type="number" name="cant" step="any" value=""></h2>
<br>
<br>
<h2>ITEM: <input type="number" name="ite1" step="any" value=""> VALOR: <input type="number" name="val1" step="any" value="">  CANTIDAD: <input type="number" name="cant1" step="any" value=""></h2>
<br>
<br>
<h2>ITEM: <input type="number" name="ite2" step="any" value=""> VALOR: <input type="number" name="val2" step="any" value="">  CANTIDAD: <input type="number" name="cant2" step="any" value=""></h2>
<br>
<br>
<h2>ITEM: <input type="number" name="ite3" step="any" value=""> VALOR: <input type="number" name="val3" step="any" value="">  CANTIDAD: <input type="number" name="cant3" step="any" value=""></h2>
<br>
<br>
<h2>ITEM: <input type="number" name="ite4" step="any" value=""> VALOR: <input type="number" name="val4" step="any" value="">  CANTIDAD: <input type="number" name="cant4" step="any" value=""></h2> 
<br>
<br>
<br>
<input type="submit" name="calcule" value="procesar factura">
</center>
</body>
</html>