<?php
include "./model/conexion.php";
if (!empty ($_POST['btneditarProducto'])) { 
   if (!empty($_POST["nombre"]) and !empty($_POST["referencia"]) and !empty($_POST["precio"]) and !empty($_POST["peso"]) and !empty($_POST["categoria"]) and !empty($_POST["stock"])){
 
 $id          = $_POST["id"];
 $nombre      = $_POST["nombre"];
 $referencia  = $_POST["referencia"];
 $precio      = $_POST["precio"];
 $peso        = $_POST["peso"];
 $categoria   = $_POST["categoria"];
 $stock       = $_POST["stock"];

  
$actualizar = $con->prepare("UPDATE productos SET nombre=?, ref=?, precio=?, peso=?, cat=?, stock=? WHERE id=?");
 $actualizar->bind_param("ssiisii", $nombre, $referencia, $precio, $peso, $categoria, $stock, $id);

if($actualizar->execute()){

	if($actualizar->affected_rows==0){
		echo "<div class='alert alert-danger'><i class='fa-solid fa-circle-question'></i> Ninguna fila fue actualizada</div>";
	}else{ 
        echo "Datos actualizados correctamente.";
	    $actualizar->close();
        header("location:index.php");
    }
}else {
	echo 'Error al realizar la consulta: '.$actualizar->error;
	$actualizar->close();
}
}else {
 echo'campos vacios';
} 
 }

?>