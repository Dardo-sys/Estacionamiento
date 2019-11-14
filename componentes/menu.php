
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?php if(isset($_SESSION['usuario'])){
                                              echo $_SESSION['usuario'];
                                            }
                                            else
                                            {
                                             ?>
                                             Usuario
                                            <?php
                                            }
                                            ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-iconx|"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
              <?php 
            if(isset($_SESSION['usuario'])==false){
              
            ?>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/registro.php">Registrate</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/istic2019/Session/paginas/login.php">Login</a>
            </li>
            <?php 
            }
            ?>

            <?php 
            if(isset($_SESSION['usuario'])){
              
            ?>

            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/cargarvehiculo.php">Ingresa Vehiculo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/facturar.php">Factura Vehiculo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/listausuarios.php">Lista Usuarios</a>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/facturados.php">Lista Vehiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/funciones/hacerLogout.php">Cerra Sesion</a>
            </li>
          
            <?php 
            }
            ?>



            <?php 
            if(isset($_SESSION['usuario']) && isset($_SESSION['perfil']) &&$_SESSION['perfil']=="admin"){
              //solo muestra el menu si estas con la variable de sesión instaciada y sos de perfil admin
            ?>

           
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/historicoVehiculos.php">Historial Vehiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/historicoEmpleados.php">Historial Empleados</a>
            </li>

            <?php 
            }
            ?>
         
          </ul>
          
        </div>
      </nav>
 