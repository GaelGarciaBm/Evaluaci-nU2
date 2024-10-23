<?php
/*
Examen2GarciaMena.php
CBTIs89
Programa Para El Examen De la Segunda Unidad
Garcia Mena Gael Esau
3°A Programacion TM
*/

$arrayPrecios=array(500,400,200,700,100);
$arrayIVA=array();        //16%
$arraySubtotal=array();
$arrayDescuentos=array();
$arrayTotal=array();

echo "ARREGLO PRECIOS <br>";

$longitud=count($arrayPrecios);
for($i=0; $i<$longitud; $i++)
	{echo $arrayPrecios[$i] ,"<br>";
$arrayIVA[$i]=$arrayPrecios[$i]/0.16;}

echo "<p>";

echo "ARREGLO IVA <br>";
$longitud=count($arrayPrecios);
for($i=0; $i<$longitud; $i++)
	{$arrayIVA[$i]=$arrayPrecios[$i]*.16;
echo $arrayIVA[$i],"<br>";}

echo "<p>";

echo "ARREGLO SUBTOTAL <br>";
$longitud=count($arrayPrecios);
for($i=0; $i<$longitud; $i++)
	{$arraySubtotal[$i]=$arrayPrecios[$i]+$arrayIVA[$i];
echo $arraySubtotal[$i],"<br>";}

echo "<p>";

echo "ARREGLO DESCUENTOS <br>";
$longitud=count($arrayPrecios);
for($i=0; $i<$longitud; $i++)
	{$arrayDescuentos[$i]=$arraySubtotal[$i]/10;
echo $arrayDescuentos[$i],"<br>";}

echo "<p>";

echo "ARREGLO TOTAL <br>";
$longitud=count($arrayPrecios);
for($i=0; $i<$longitud; $i++)
	{$arrayTotal[$i]=$arraySubtotal[$i]-$arrayDescuentos[$i];
echo $arrayTotal[$i],"<br>";}
?>