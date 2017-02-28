<?php
/*$servidor="localhost";
$usuario="root";
$pwd="";
$BD="catalogo";*/

$servidor="mysql.hostinger.es";
$usuario="u336551765_cs";
$pwd="vazquez";
$BD="u336551765_cs";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD) or die("Error al conectar la BD".mysqli_error());
?>