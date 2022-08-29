
/* alerta producto nuevo
 */
function eliminarProducto(){   
Swal.fire({
    html:
    'quieres eliminar el producto: <?= $GET_["id"] ?> ?'
    });

}
