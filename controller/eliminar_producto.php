<?php

if (!empty ($_GET['id'])) { 
    $id = $_GET['id'];
    $eliminar = $con->prepare("DELETE FROM productos WHERE id=?");
    $eliminar->bind_param("i", $id);
    if($eliminar->execute()){

       if($eliminar->affected_rows==0){
           echo "<div class='alert alert-danger'><i class='fa-solid fa-circle-question'></i> El producto no fue borrado</div>";
       }else{ 
        ?>
    <script src="./view/js/main.js"></script>
    <script>
     eliminarProducto();
    </script>
       <?php
           
           $eliminar->close();
           header("location:index.php");
       }
   }else {
       echo 'Error al realizar la consulta: '.$eliminar->error;
       $eliminar->close();
   }

}
 
?>