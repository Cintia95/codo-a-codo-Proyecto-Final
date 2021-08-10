<?php

require 'conexion.php';
$id= $_POST['id'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$direccion= $_POST['direccion'];
$edad= $_POST['edad'];
$cargo= $_POST['cargo'];
$clase= $_POST['clase'];

$insertar = "INSERT INTO miembros VALUE ('$id','$nombre','$apellido','$direccion','$edad','$cargo','$clase')";

$insert = mysqli_query($conectar, $insertar);

if ($insert){ ?>
    <script>
        alert("Se ha guardado con éxito")
    </script>
    <?php } else { ?>
    <script>
        alert("Ocurrió un error al intentar guardar")
    </script>
    <?php } ?>
<script>
window.location.replace('listado-miembros.php'); 
</script>
<?php
require 'cerrar.php'

?>