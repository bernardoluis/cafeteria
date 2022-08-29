<?php 
include "view/head.php"; 
?>
<div class="container-fluid">
        <div class="row">
      <?php
       include("model/conexion.php");
       include("controller/nuevo_producto.php");
      ?>
   
    <h4 class="text-center text-success" style="margin:1em 0 1em 0 !important;">Nuevo producto</h4>
    <br><br><br>
     <form class="col-lg-4 col-md-12 col-sm-12" method="POST"  style="margin: auto !important;">
      <div class="mb-3">

        <input type="text"  class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre producto">
      </div>
      <div class="mb-3">

        <input type="text" class="form-control" name="referencia" aria-describedby="emailHelp" placeholder="Referencia">
      </div>
      <div class="mb-3">

        <input type="number" class="form-control" name="precio" aria-describedby="emailHelp" placeholder="Precio">
      </div>
      <div class="mb-3">
        <input type="number" class="form-control" name="peso" aria-describedby="emailHelp" placeholder="Peso">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" name="categoria" aria-describedby="emailHelp" placeholder="Categoria">
      </div>
      <div class="mb-3">
        <input type="number" class="form-control" name="stock" aria-describedby="emailHelp" placeholder="stock">
      </div>

      <button type="submit" class="btn btn-primary" name="nuevoRegistro" value="ok"> Crear </button>

      <a href="http://localhost/CAFETERIA/" class="btn"  >Volver</a>
    </form>
   </div>
 </div>
 <?php include "view/footer.php"; ?>