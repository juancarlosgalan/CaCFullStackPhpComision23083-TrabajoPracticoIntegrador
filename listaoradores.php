<?php

include("conexion.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./Css/estilo.css">
    <link rel="stylesheet" href="./Css/estilotabla.css">


    <title>lista oradores</title>
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logo" src="Imagenes/codoacodo.png" alt="CodoaCodoLogo" width="100"><p2>Conf Bs As</p2>
            </a>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
   
            <div class="collape navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="index.html">La Conferencia</a></li>
                    <li class="nav-item"><a class="nav-link" href="#conocealosoradores" target="_blank">Los Oradores</a></li>
                    <li class="nav-item"><a class="nav-link" href="registrousuario.html">El Lugar y La Fecha</a></li>
                    <li class="nav-item"><a class="nav-link" href="#formulario">Convierte en Orador</a></li>  
                    <li class="nav-item"><a class="nav-link text-success" href="tickets.html">Comprar Tickets</a></li>
                </ul>       
            </div>
        </div>    
    </nav>

            <div class="container" class="mb-3">
              <h3 class="text-center pb-0 h6"></h3>
                <h3 class="text-center pb-2 h1"><b><u>Listado Oradores</u></b></h3>
                    <h2 class="text-center pb-2 h7">Consulta <u>aqui!</u> el listado de los oradores del evento.</h2>
                        <h2 class="text-center pb-2 h7">Si tiene alguna duda o necesitas realizar otro tipo de consulta escribenos a <u>confbsas@ba.com.ar.</u></h2>
            </div>

         
<div class="container">
        <table class="table table-bordered table-light">
          <thead>
            <tr>
              <th scope="col">#</th>
                <th scope="col">Apellido</th>
                  <th scope="col">Nombre</th>
                    <th scope="col">Tematica</th>
                      <th scope="col">Mail</th>
            


<?php
  $sql="SELECT id,apellido,nombre,tematica,mail from listaoradores where 1";
  $result=mysqli_query($conexion,$sql);
  while($ver=mysqli_fetch_row($result)){
?>

            <tr>
              <td><?php echo $ver[0] ?></td>
              <td><?php echo $ver[1] ?></td>
              <td><?php echo $ver[2] ?></td>
              <td><?php echo $ver[3] ?></td>
              <td><?php echo $ver[4] ?></td>
            </tr>  
                </tr>
          
      
<?php
}
?>
              
            </thead>
          </table>
</div>



      <footer>
        <div class="footer">
            <div class="row">
              <div class="col">Preguntas Frecuentes</div>
                <div class="col" href="#">Contáctanos</div>
                    <div class="col">Prensa</div>
                        <div class="col">Conferencias</div>
                            <div class="col">Términos y Condiciones</div>
                                <div class="col">Privacidad</div>
                                    <div class="col">Estudiantes</div>
            </div>
        </div>
      </footer>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>