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
          <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Cargar nuevos miembros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listado-miembros.php">Gestionar miembros</a>
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
<form action="guardar.php" method="POST" class="row g-3" style="background-color: #F9E308; margin: 30px 25%; padding: 20px">
    <h3 style="text-align: center">Carga de miembros del club</h3>
    <div class="row g-3">
        <div class="col">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        </div>
        <div class="col">
            <label for="inputApellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" placeholder="Apellido">
        </div>
    </div>
    <div class="row g-3">
        <div class="col">
            <label for="inputDNI" class="form-label">DNI</label>
            <input type="number" class="form-control" name="id" placeholder="DNI">
        </div>
        <div class="col">
            <label for="inputDireccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" placeholder="Dirección">
        </div>
    </div>
    <div class="col-md-2">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" name="edad">
    </div>
    <div class="col-md-4">
        <label for="cargo" class="form-label">Cargo</label>
        <select name="cargo" class="form-select">
            <option selected>(Elegir)</option>
            <?php
            $cargos = array("Conquistador","Director","Capellán","Consejero","Instructor");
            for ($i=0;$i<=4;$i++){ ?>
              <option value="<?php echo $cargos[$i];?>"><?php echo $cargos[$i];?></option>
            <?php }; ?>
        </select>
    </div>
    <div class="col-md-4">
        <label for="clase" class="form-label">Clase</label>
        <select name="clase" class="form-select">
          <option selected>(Elegir)</option>
          <?php
          $clases = array("Amigo","Compañero","Explorador","Pionero","Excursionista","Guía","Guía Mayor");
          for ($i=0;$i<=6;$i++){ ?>
            <option value="<?php echo $clases[$i];?>"><?php echo $clases[$i];?></option>
          <?php }; ?>
        </select>
    </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-center" style="margin-bottom: 10px;">
    <button type="submit" class="btn btn-light">Guardar</button>
  </div>
</form>
</main>

</body>
</html>