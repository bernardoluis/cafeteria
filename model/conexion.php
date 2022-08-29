<?php
include("./config/rutas.php");

$BDHOST    = 'localhost';
$BDUSUARIO = 'root';
$BDPASS    = '';
$BD        = 'cafeteria';

$con =new mysqli($BDHOST, $BDUSUARIO, $BDPASS, $BD);
mysqli_set_charset($con, "utf8");

?>