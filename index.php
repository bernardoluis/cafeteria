<?php 
include "view/head.php"; 
include("model/conexion.php");
include "controller/eliminar_producto.php"; 

?>
    <div class="container">
        <div class="row">
            <h3 class="text-center text-success">Cafeteria</h3>
            
            <div class="float-right"><a href="nuevoProducto.php" class="btn btn-success float-right"> Nuevo </a></div>

      <div class="col-lg-12 col-md-12 col-sm-12">
        <table class="table table-striped">
         <thead>
           <tr>
             <th scope="col">id</th>
             <th scope="col">Producto</th>
             <th scope="col">Ref</th>
             <th scope="col">Precio</th>
             <th scope="col">Peso</th>
             <th scope="col">Precio</th>
             <th scope="col">Categoria</th>
             <th scope="col">Stock</th>
             <th scope="col">Fecha</th>
             <th scope="col">Editar</th>
             <th scope="col">Eliminar</th>
           </tr>
         </thead>
         <tbody>
            <?php
            $sql= $con->query("select * from productos");
            while($data = $sql->fetch_object()){ ?>
          
          <tr>
             <th scope="row">1</th>
             <td><?= $data->id     ?></td>
             <td><?= $data->nombre ?></td>
             <td><?= $data->ref    ?></td>
             <td><?= $data->precio ?></td>
             <td><?= $data->peso   ?></td>
             <td><?= $data->cat    ?></td>
             <td><?= $data->stock  ?></td>
             <td><?= $data->fecha  ?></td>
             <td class="text-center">
              <a href="editarProducto.php?id=<?= $data->id ?>"><i class="fa-solid fa-pen-to-square  text-warning" ></i></a>
            </td>
             <td class="text-center">
               <a href="index.php?id=<?= $data->id ?>"> <i class="fa-solid fa-trash-can text-danger"></i></a>
            </td>
           </tr>
           
         <?php } ?>
          
         </tbody>
       </table>
      </div>
     </div>
    </div>

<?php include "view/footer.php"; ?>