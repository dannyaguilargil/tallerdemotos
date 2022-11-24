<!--CONVERTIDOR -> https://khaledkzy.github.io/pixel-vh-vw-converter/ -->






<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <link rel="icon" href="imgs/motocross.ico">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Home</title>
</head>
<body>
    <header class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand " href="index.php">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Gestion_repuestos/repuestos_cliente.php">Repuestos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Gestion_taller/taller.php">Taller</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Gestion_compras/compras.php">Compras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Gestion_contabilidad/contabilidad.php">Contabilidad</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                  </li>
                </ul>
              
              </div>
              <a class="btn btn-light fas fa-user" href="login.html"></a>
              <a class="btn btn-light fas fa-shopping-cart"></a>
              <a class="btn btn-light"> DARK</a>
            </div>
          
          </nav>
          <div class="containe">
            <h3 class="titulo1" >Taller de motos
                <p href="" class="fas fa-motorcycle"></p>
            </h3>
          </div>
                    
    </header>

  
    <div class="container">

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgs/695925.jpg" class="d-block w-100" alt="..." id="slidesshowImg">
          </div>
          <div class="carousel-item">
            <img src="imgs/motopolvo.PNG" class="d-block w-100" alt="..." id="slidesshowImg"> <!--esta si-->
          </div>
          <div class="carousel-item">
            <img src="imgs/142785.jpg" class="d-block w-100" alt="..." id="slidesshowImg">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>
    <h4 id="id3">Productos destacados</h4>


    <div class="container">
      <div class="row">


          <div class="cajas col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <p class="tit_equip">Aceite motul</p>
            <img class="imgs_cajitas" src="imgs/aceite2.jpg" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

          <div class="cajas col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <p class="tit_equip">Casco suzuki</p>
            <img class="imgs_cajitas" src="imgs/casco_suzuki.jpg" alt="">
          </div>

          <div class="col-lg-2 col-md-12 col-sm-2 col-xs-2"></div>

          <div class="cajas col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <p class="tit_equip">Tacometro bws 125</p>
            <img class="imgs_cajitas" src="imgs/tacometro_bws.jpg" alt="">
          </div>

          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

          <div class="cajas col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <p class="tit_equip">Carenaje farola fz</p>
            <img class="imgs_cajitas" src="imgs/farola_fz.jpg" alt="">
          </div>


    </div>
    </div>

    <br> 
    
    <footer class="container bg-light">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"> </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <p> Taller de motos Universidad de pamplona 2021.</p>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          <a href="" class="btn btn-primary fab fa-facebook"></a>
          <a href="" class="btn btn-success fab fa-telegram"></a>
          <a href="" class="btn btn-primary fab fa-twitter"></a>
          
         </div>
    </footer>
    
   






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>