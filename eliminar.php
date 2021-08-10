<?php

require 'conexion.php';

$id = $_GET['id'];


$eliminar = "DELETE FROM miembros WHERE id ='$id'";


$insert=mysqli_query($conectar, $eliminar);

if ($insert){ ?>
    <script>
        alert("Se ha eliminado con éxito")
    </script>
    <?php } else { ?>
    <script>
        alert("Ocurrió un error al intentar eliminar")
    </script>
<?php }  ?>
<script>
window.location.replace('listado-miembros.php'); 
</script>
<?php
require 'cerrar.php'
?>
