<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/repuestos_administrador.css">

  <title>Repuestos</title>
</head>

<body>
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand habitual" href="repuestos_administrador.php">Repuestos Administrador TABLA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Gestion_taller/taller.php">Taller</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Gestion_compras/compras.php">Compras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contacto.html">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Gestion_contabilidad/contabilidad.php">Contabilidad</a>
            </li>
          </ul>

        </div>
        <a class="btn btn-light fas fa-user" href="login.html"></a>
        <a class="btn btn-light fas fa-shopping-cart"></a>
        <a class="btn btn-light"> DARK</a>
      </div>

    </nav>
    <div class="containe">
      <h3 class="titulo1">Repuestos
        <p href="" class="fas fa-motorcycle"></p>
      </h3>
    </div>

  </header>

        <div class="container">
        <div class="row">
        <div class="izquierdo cajas col-lg-2 col-md-2 col-sm-2 col-xs-2">
       
        <h5 class="res">Repuestos</h5>
        <!-- Search form -->
        <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
        aria-label="Search">
        <i class="fas fa-search" aria-hidden="true"></i>
         </form>
         <br>
         <input type="radio" name="" id="">Todas<br>
         <input type="radio" name="" id="">Honda<br>
         <input type="radio" name="" id="">Suzuki<br>
         <input type="radio" name="" id="">Yamaha<br>
         <input type="radio" name="" id="">Kawasaki<br>
         <input type="radio" name="" id="">Royal enfield<br>
         <input type="radio" name="" id="">Ktm<br>
         <br>
        <p class="repuestos">Precio</p>
        <input class="repuest_input" type="range" name="" id="">
         <label for="">Cantidad</label>
        </div>
      
       
        <!--PARTE DEL ADMIN -->
        <div class="izquierdo2 col-lg-1 col-md-1 col-sm-1 col-xs-1">
         <!-- modales-->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">+</button> <br> <br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@fat">A</button> <br> <br>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@getbootstrap">-</button> 

<!--Modal de inserccion -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel"><b>Inserccion de datos</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
       <form  action="../../Servidor/registrar_repuesto.php" method="POST" enctype="multipart/form-data" >

        <!--
         <div class="mb-1">
           <label for="id" class="col-form-label">Id</label> <br> 
           <input type="text" class="form-control-sm" id="id"  name="id" disabled> 
         </div> -->
         <div class="mb-1">
           <label for="nombre" class="col-form-label">Nombre:</label> <br>
           <input type="text" class="form-control-sm" id="nombre" name="nombre" required> 
         </div>
         <div class="mb-1">
           <label for="marca" class="col-form-label">Marca:</label> <br>
           <input type="text" class="form-control-sm" id="marca" name="marca" required>
         </div>
         <div class="mb-1">
           <label for="precio" class="col-form-label">Precio:</label> <br>
           <input type="text" class="form-control-sm" id="precio" name="precio" required>
         </div>
        
         <div class="mb-1">
         <label for="cantidad" class="col-form-label">Cantidad:</label> <br>
           <input type="number" id="cantidad" name="cantidad" required class="form-control-sm"> 
         </div>
         <div class="mb-1">
           <label for="descripcion" class="col-form-label">Descripcion:</label> <br>
           <input type="text"  id="descripcion" name="descripcion"  class="form-control-sm" required> 
         </div>

         <div class="mb-1"> <br>
         <input type="file" class="form-control" id="imagen" name="imagen" class="form-control-sm"  required>
         </div>

     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-success">Insertar</button>
       
     </div>
     </form>
     
   </div>
  
 </div>
 

</div>
<!-- Modal de actualizacion -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel"><b>Actualizacion de datos</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
       <form>
         
         <div class="mb-1">
           <label for="id_busqueda">Cambio:</label>
           <input type="" class="form-control-sm" id="recipient-id">
         </div>
          <!--
         <div class="mb-1">
           <label for="recipient-id" class="col-form-label">Id</label>
           <input type="text" class="form-control-sm" id="recipient-id" disabled>
         </div>
          -->
         <div class="mb-1">
           <label for="recipient-name" class="col-form-label">Nombre:</label>
           <input type="text" class="form-control-sm" id="recipient-name">
         </div>
         <div class="mb-1">
           <label for="recipient-marca" class="col-form-label">Marca:</label>
           <input type="text" class="form-control-sm" id="recipient-marca">
         </div>
         <div class="mb-1">
           <label for="recipient-precio" class="col-form-label">Precio:</label>
           <input type="text" class="form-control-sm" id="recipient-precio">
         </div>
         <div class="mb-1">
           <label for="recipient-descripcion" class="col-form-label">Descripcion:</label>
           <input type="text" class="form-control-sm" id="recipient-descripcion">
         </div>
         <div class="mb-1">
           <input type="file" class="form-control-sm" id="">
           
         </div>

       </form>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="button" class="btn btn-primary">Actualizar</button>
     </div>
   </div>
 </div>
</div>
<!-- Modal de eliminar -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel"><b>Eliminar datos</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
       <form action="../../Servidor/eliminar_repuesto.php" method="POST">
         
       <div class="mb-1">
           <label for="id" class="col-form-label">Id busqueda</label>
           <input type="number" class="form-control-sm" id="id" name="id" required>
      </div>

       
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-danger">Eliminar</button>
     </div>
     </form>
   </div>
 </div>
</div>

</div>
<!-- FIN DE MODALES-->
    

        <!-- -->
        
        
        <div class="derecho col-lg-9 col-md-9 col-sm-9 col-xs-9">
        

           <!--COLUMNA DEL LADO DERECHO-->
            <div class="row">
          
                  
            <?php 
                      include '../../Servidor/conexion.php';
                      $i=1;

                    $consulta="SELECT * from repuestos";
                    $resultado=mysqli_query($mysqli,$consulta);
                    if($resultado){
                        while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            ?>
                            
                          
                          <div class="cajita_div">   
                          <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"style="width: 180px;" > <br>
                          <?php echo $descripcion; ?> <br>
                          <a href="../Gestion_compras/compras.php" class="fas fa-eye btn btn-light" ></a>
                          </div>
                        
                        <?php 
                        }
                        
                    } ?>

            </div>

        </div>


</div>
</div>

<footer class="container bg-light">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto veritatis cum, hic deleniti saepe amet porro, blanditiis at quo iste nemo fugiat harum provident deserunt illum veniam laudantium pariatur.</p>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <h5> <b> Medios de contacto </b></h5>
        <a href="" class="btn btn-primary fab fa-facebook"></a>
        <a href="" class="btn btn-success fab fa-telegram"></a>
        <a href="" class="btn btn-primary fab fa-twitter"></a>
        <a href="" class="btn btn-success fab fa-whatsapp"></a>
      </div>
  </footer>



          

</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>