<?php

require 'conexion.php';

$consulta = "SELECT * FROM miembros";

$listado=mysqli_query($conectar, $consulta);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Club de conquistadores</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="background-color: #F9E308">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Emblema_del_Club_de_Conquistadores.svg/1200px-Emblema_del_Club_de_Conquistadores.svg.png" alt="logo club de conquistadores" height="100px">
    <a class="navbar-brand" href="#">Club de <br> Conquistadores</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"style="margin-left: 50%">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="carga-miembros.php">Cargar nuevos miembros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Gestionar miembros</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<main>
<div style="margin: 20px 10%;">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
      <th scope="col">Dirección</th>
      <th scope="col">Edad</th>
      <th scope="col">Cargo</th>
      <th scope="col">Clase</th>
      <th scope="col" colspan="2">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php

while($tabla = mysqli_fetch_array($listado))
{?>

    <tr>
    <td><?php echo $tabla['nombre'];?></td>
    <td><?php echo $tabla['apellido'];?></td>
    <td><?php echo $tabla['id'];?></td>
    <td><?php echo $tabla['direccion'];?></td>
    <td><?php echo $tabla['edad'];?></td>
    <td><?php echo $tabla['cargo'];?></td>
    <td><?php echo $tabla['clase'];?></td>
    <td><a href="editar-miembros.php?id=<?php echo $tabla['id'];?>"><img src="https://image.flaticon.com/icons/png/512/2919/2919592.png" alt="editar" height="20px"></a></td>
  
    <td><a href="eliminar.php?id=<?php echo $tabla['id'];?>"><img src="https://image.flaticon.com/icons/png/512/1345/1345874.png" alt="eliminar" height="20px"></i></a></td>
   
    
    </tr>
<?php } ?>
  </tbody>
</table>
</div>
</main>

</body>
</html>

<?php
  require 'cerrar.php'
?>