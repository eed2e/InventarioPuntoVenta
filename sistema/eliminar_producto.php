<?php
if (!empty($_GET['id'])) {
    require("../conexion.php");
    $codproducto = $_GET['id'];
        $query = mysqli_query($conexion, "SELECT imagen  FROM producto  WHERE codproducto = $codproducto");
        
            If (unlink($query)) {
              // file was successfully deleted
            } else {
                 // there was a problem deleting the file
                }
        }
        
    $query_delete = mysqli_query($conexion, "DELETE FROM producto WHERE codproducto = $codproducto");
    mysqli_close($conexion);
    echo "si entra";
    
    header("location: lista_productos.php");
}
?>