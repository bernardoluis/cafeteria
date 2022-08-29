<?php
include("./model/conexion.php");

if (!empty($_POST["nuevoRegistro"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["referencia"]) and !empty($_POST["precio"]) and !empty($_POST["peso"]) and !empty($_POST["categoria"]) and !empty($_POST["stock"])){
       
        $nombre      = $_POST["nombre"];
        $referencia  = $_POST["referencia"];
        $precio      = $_POST["precio"];
        $peso        = $_POST["peso"];
        $categoria   = $_POST["categoria"];
        $stock       = $_POST["stock"];
        $fecha       = date("Y-m-d");



       $pr = $con->prepare("INSERT INTO productos(nombre,ref,precio,peso,cat,stock,fecha) VALUES (?,?,?,?,?,?,?)"); 
       $pr->bind_param("ssiisid", $nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha);
        
         if($pr->execute()){          	
           echo '<div class="alert alert-success" role="alert">
                     <h4><i class="fa-solid fa-circle-check"></i> Producto creado</h4>
               </div>';
           	$pr->close();
           } else {
               echo '<div class="alert alert-danger " role="alert">
               <h5><i class="fa-solid fa-circle-exclamation"></i> Error al crear productos</h5>
            </div>'.$pr->error;
           	$pr->close();
           }
     
        }else{
         echo '<div class="alert alert-danger " role="alert">
            <h5><i class="fa-solid fa-circle-exclamation"></i> Complete todos los campos</h5>
         </div>';
      }
}




/* 
        $sql=$con->query("insert into productos(nombre,ref,precio,peso,cat,stock,fecha)values('$nombre','$referencia','$precio','$peso','$categoria','$stock', '$fecha')");
        if ($sql==1) {
           echo '<div class="alert alert-success" role="alert">
                    <h4><i class="fa-solid fa-circle-check"></i> Producto creado</h4>
                </div>';
        }else{
     echo '<div class="alert alert-danger " role="alert">
             <h5><i class="fa-solid fa-circle-exclamation"></i>Error al crear productos</h5>
          </div>';
    } */

?>