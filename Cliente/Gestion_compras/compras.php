<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/compras_estilos.css">

  <title>Repuestos</title>
</head>

<body>
  <header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand " href="compras.php">Compras</a>
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
              <a class="nav-link" href="../Gestion_repuestos/repuestos_cliente.php">Repuestos</a>
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
      <h3 class="titulo1">Compras
        <p href="" class="fas fa-motorcycle"></p>
      </h3>
    </div>

  </header>


  <div class="container">

    <div class="row">

      <div class="izquierdo cajas col-lg-3 col-md-3 col-sm-3 col-xs-3">

        <h5 class="res">Repuesto seleccionado</h5>
        <br>

        <img class="imgs_cajitass" src="../imgs/aceite2.jpg" alt="">
        <br> <br>
        <p>Detalles del producto</p>

        <br> <br> <br> <br> <br> <br>
      </div>


      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
      </div>



      <div class="derecho col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <br>



            <form class="">
              <div class="medio_pago">
                <p>Medio de pago:</p>
                <label>Tarjeta</label>
                <input type="text" placeholder="numero">
                <input type="checkbox" placeholder="">N/A <br> <br>
                <label>CVV</label>
                <input type="text" placeholder="numero">
              </div>
            </form>

            <!-- SEGUNDO BLOQUE-->
            <br> <br>

            <div class="medio_pago">
              <p><b>Formas de envio:</b></p>
              <p>Elige Ciudad destino
                <select name="select">
                  <option value="Bucaramanga">Bucaramanga</option>
                  <option value="Cucuta" selected>Cucuta</option>
                  <option value="Cali">Cali</option>
                </select>
              </p>

              <p>Costo:</p>
              <p>Tiempo de entrega:</p>
              <br> <br>
              <br> <br>
              <br> <br>
            </div>


          </div>


          <!--barra derecha -->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <br>
            <div class="medio_pago">
              <br>
              <label>Medio de pago</label>
              <input type="text" placeholder="numero" disabled><br>
              <input type="checkbox" placeholder="">N/A <br>
              <label>Envio seleccionado</label>
              <input type="text" placeholder="numero" disabled> <br>
              <label>Garantia</label>
              <input type="text" placeholder="numero" disabled><br>
              <a href="" class="btn btn-success">Calcular</a>
              <a href="" class="btn btn-success">Comprar</a>
            </div>

            <br> <br>

            <div class="medio_pago">
              <br>
              <label>Garantia</label>
              <input type="text" placeholder="numero" disabled>
              <p></p>
              <input type="checkbox" placeholder="">N/A <br> <br>
              <br> <br>

            </div>


          </div>
        </div>





        <br>
      </div>




      <br>
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


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>