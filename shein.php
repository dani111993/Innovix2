<?php

require 'config/database.php';
$db = new Database();
$con = $db->conectar();



$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Innovix - H&M -</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\main_style.css">
    <link rel="stylesheet" href="styles\shien_style.css">
    <link rel="stylesheet" href="styles\footer_style.css">

    <script src="src\shein_listing.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7e91ed712c.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container">
             <div class="w-100 d-flex justify-content-between">
              <div>
                <i class="fa-solid fa-envelope text-light contact-info"></i>
                <a href="https://mail.google.com" target="_blank" class="navbar-sm-brand text-light text-decoration-none
                       contact-info">Innofix@gmail.com
                </a>
                <i class="fa-solid fa-phone contact-info text-light"></i>
                <a href="" class="navbar-sm-brand text-white text-decoration-none
                       contact-info">246-159-5454</a>
              </div>
                     <div>
                       <a href="https://www.facebook.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-facebook me-2"></i></a>
                       <a href="https://www.instagram.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-instagram me-2"></i></a>
                       <a href="https://www.linkedin.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-linkedin me-2"></i></a>
                       <a href="https://www.twitter.com" target="_blank" class="text-white">
                           <i class="fa-brands fa-twitter me-2"></i></a>
                     </div>
                   </div>
                 </div>
               </nav>
             </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container d-flex justify-content-between">
          <div>
            <a href="index.html"><h1 class="nombre_compania">Innovix</h1></a>
          </div>
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item nav-items">
                    <div class="dropdown show">
                        <a class="nav-link nav-links dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tiendas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="adidas.html">Adidas</a>
                          <a class="dropdown-item" href="HandM.html">H&M</a>
                          <a class="dropdown-item" href="shein.php">Shein</a>
                        </div>
                    </div>
    
                  </li>
                  <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="#">Hombre</a>
                  </li>
                  <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="#">Mujer</a>
                  </li>
                  <li class="nav-item nav-items">
                    <a class="nav-link nav-links" href="#">Niño</a>
                  </li>
                </ul>
                <div class="position-relative">
                  <a href="favoritos.html" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-heart nav-icon"></i>
                  </a>
                  <a href="cart.html" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-cart-arrow-down nav-icon"></i>
                  </a>

                  <a href="perfil.html" class="text-decoration-none text-dark">
                    <i class="fa-solid fa-user nav-icon"></i>
                  </a>
                </div>
                
                <script>
                  document.addEventListener('DOMContentLoaded', function () {
                    let totalQuantity = 0;
                    let iconCartSpan = document.querySelector('.icon-cart span');

                    let cart = JSON.parse(localStorage.getItem('cart'));
                    if (cart) {
                      cart.forEach(item => {
                        totalQuantity += item.quantity;
                      });
                    }
                    
                    iconCartSpan.innerText = totalQuantity;
                });
                </script>
                
                <div class="position-absolute rounded-circle icon-cart cart">
                  <span>0</span>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </nav>
    </header>

    <div class="">
        <img src="imagenes\shien_imagenes\shein_logo.png" alt="" class="logo rounded mx-auto d-block">
    </div>



    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
           <div id="overflow">
              <div class="inner">
                 <div class="slide slide_1">
                    <img src="imagenes\shien_imagenes\slider_img1.jpeg" alt="">
                 </div>
                 <div class="slide slide_2">
                    <img src="imagenes\shien_imagenes\slider_img2.jpeg" alt="">
                 </div>
                 <div class="slide slide_3">
                    <img src="imagenes\shien_imagenes\slider_img3.jpeg" alt="">
                 </div>
              </div>
           </div>
        </div>
        <div id="controls">
           <label for="slide1"></label>
           <label for="slide2"></label>
           <label for="slide3"></label>
           
        </div>
        <div id="bullets">
           <label for="slide1"></label>
           <label for="slide2"></label>
           <label for="slide3"></label>
           
        </div>
     </div>

     <main>
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($resultado as $row) { ?>
              <div class="col">
                <div class="card shadow-sm">    
                  <?php

                  $id = $row['id'];
                  $imagen = "imagenes/shien_imagenes/" . $id . "/principal.jpg";

                  if(!file_exists($imagen)){
                   $imagen = "imagenes/shien_imagenes/no-photo.jpg";
                  }
                  ?>

                  <img src="<?php echo $imagen; ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                    <p class="card-text">$ <?php echo number_format($row['precio'], 2, '.', ','); ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="#" class="btn btn-primary">Detalles</a>
                      </div>  
                      <a href="#" class="btn btn-success">Agregar</a>
                    </div>  
                  </div>
                </div>                      
              </div>      
            <?php } ?>
    <div class="container_cart">
    
      <div></div>

      <div class="listProduct">
        <div class="item">
          
        </div>
      </div>

  </div>
  <footer >
    <div class="footer-links">
      <a href="#">Configuración de las cookies</a>
      <a href="#">Nuestros Datos</a>
      <a href="#">Términos y Condiciones</a>
      <a href="#">Uso del Sitio</a>
      <a href="#">Términos y Condiciones Promociones</a>
      <a href="#">Privacidad de Videovigilancia</a>
  </div>
    <p>&copy; 2024 Innovix Mexico S.A. de C.V.</p>
    <p>INNOVIX® es una marca registrada de Innovix Inc.</p>
</footer>
</body>
</html>