<?php
include "view/head.php"; 
include "model/conexion.php";


$id = $_GET["id"];
$pr = $con->query("select * from productos where id=$id");
?>
<div class="container-fluid">
        <div class="row">
       
    
       <form class="col-lg-4 col-md-12 col-sm-12" method="POST"  style="margin: auto !important;">
       <input type="hidden" name="id"  value="<?= $_GET["id"] ?>">
       <?php while ($data= $pr->fetch_object()) { ?>
        <h4 class="text-center text-success" style="margin:1em 0 1em 0 !important;">Editar producto (<?= $data->nombre ?>)</h4>
       <div class="mb-3">
           <input type="text"  class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Nombre producto" value="<?= $data->nombre ?>">
         </div>
         <div class="mb-3">
           <input type="text" class="form-control" name="referencia" aria-describedby="emailHelp" placeholder="Referencia" value="<?= $data->ref ?>">
         </div>
         <div class="mb-3">
           <input type="number" class="form-control" name="precio" aria-describedby="emailHelp" placeholder="Precio" value="<?= $data->precio ?>">
         </div>
         <div class="mb-3">
           <input type="number" class="form-control" name="peso" aria-describedby="emailHelp" placeholder="Peso" value="<?= $data->peso ?>">
         </div>
         <div class="mb-3">
           <input type="text" class="form-control" name="categoria" aria-describedby="emailHelp" placeholder="Categoria" value="<?= $data->cat ?>">
         </div>
         <div class="mb-3">
           <input type="number" class="form-control" name="stock" aria-describedby="emailHelp" placeholder="stock" value="<?= $data->stock ?>">
         </div>
         <button type="submit" class="btn btn-primary" name="editarProducto" value="ok"> Actualizar </button>
         <a href="<?= $RUTA ?>" class="btn"  >Volver</a>
         <?php } ?>
    </form>
         
       


   </div>
 </div>
 <?php include "view/footer.php"; ?>