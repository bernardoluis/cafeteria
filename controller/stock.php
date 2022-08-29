<?php
include "./model/conexion.php";
if (!empty($_GET['id'])) { 
  if (!empty($_GET['stock'])){
 
 $id          = $_GET["id"];
 $nombre      = $_GET["nombre"];
 $stock       = $_GET["stock"];
 $fecha       = date("Y-m-d");

$decremento = $stock - 1;

$actualizarStock = $con->prepare("UPDATE productos SET stock=? WHERE id=?");
 $actualizarStock->bind_param("ii", $decremento, $id);

if($actualizarStock->execute()){

	if($actualizarStock->affected_rows==0){

		echo "<div class='alert alert-danger'><i class='fa-solid fa-circle-question'>
        </i> no se agregó el producto</div>";
	}else{ 
        $verificarStock = $con->prepare("SELECT* FROM ventas WHERE nombre=?");
        $verificarStock->bind_param("i", $nombre);
        if($verificarStock->num_rows == 0)
        { 
            $pr = $con->prepare("INSERT INTO ventas(nombre,stock,fecha) VALUES (?,?,?)"); 
            $pr->bind_param("sid", $nombre, $stock, $fecha);

            if($pr->execute()){          	
                echo '<div class="alert alert-success" role="alert">
                          <h4><i class="fa-solid fa-circle-check"></i> Producto comprado</h4>
                    </div>';
                    $pr->close();
                } else {
                    echo '<div class="alert alert-danger " role="alert">
                    <h5><i class="fa-solid fa-circle-exclamation"></i> Error al comprar productos</h5>
                 </div>'.$pr->error;
                    $pr->close();
                }
            echo 'no existe';
             
        
        }else{  echo "ya existe"  ;     
        
        }

      

	    $actualizarStock->close();
    /*     header("location:index.php"); */
    }
}else {
	echo 'Error al realizar la consulta: '.$actualizarStock->error;
	$actualizar->close();
}
}else {
 echo'campos vacios';
}
 }

?>
