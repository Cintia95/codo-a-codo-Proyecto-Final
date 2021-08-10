<?php

require 'conexion.php';
$id= $_POST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$direccion= $_POST['direccion'];
$edad= $_POST['edad'];
$cargo= $_POST['cargo'];
$clase= $_POST['clase'];

$actualizar = "UPDATE miembros SET nombre='$nombre', apellido='$apellido', direccion='$direccion', edad='$edad', cargo='$cargo', clase='$clase' WHERE id ='$id'";

$insert = mysqli_query($conectar, $actualizar);

if ($insert){ ?>
<script>
    alert("Se ha modificado con éxito")
</script>
<?php } else { ?>
<script>
    alert("Ocurrió un error al intentar modificar")
</script>
<?php }?>
<script>
window.location.replace('listado-miembros.php'); 
</script>
<?php
require 'cerrar.php'

?>