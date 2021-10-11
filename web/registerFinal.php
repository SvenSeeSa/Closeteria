<!DOCTYPE HTML>

<html>

<head>
<title>Closetería | Crear cuenta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/2e11025811.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>
    <a href="index.html" class="logo">
        <img src="iconos/closeteria-logo-horizontal.png" alt="">
    </a>
    <nav>
        <div class="search">
            <input type="search" placeholder="Buscar...">
            <button type="button"><i class="fas fa-search"></i></button>
        </div>
        <ul>
            <li class="btnSearch"><a href="#modal" class="openPopupLink"><figure><i class="fas fa-search"></i></figure><span>Buscar</span> </a></li>
            <li><a href=""><figure><i class="fas fa-heart"></i></figure><span>Mis likes</span> </a></li>
            <li><a href=""><figure><i class="fas fa-shopping-bag"></i></figure><span>Carrito</span> </a></li>
            <li><a href=""><figure><i class="fas fa-user"></i></figure><span>Ingresar</span> </a></li>
            <li class="hasmenu"><a><figure><img src="img/unknowuser.jpg" alt=""></figure><span>Cuenta</span> </a>
                <ul  class="subMenu" style="display: none;">
                    <li><a href="">Mi cuenta</a></li>
                    <li><a href="">Favoritos</a></li>
                    <li><a href="">Mis tallas</a></li>
                    <li><a href="">Mis compras</a></li>
                    <li><a href="">Mis ventas</a></li>
                    <li><a href="">Vender artículo</a></li>
                    <li><a href="">Seguidoras</a></li>
                    <li><a href="">Alertas</a></li>
                    <li><a href="">Salir</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <a href="javascript:void(0)" class="navBar"><i class="fas fa-bars"></i></a>
</header>
<main>
    
    <div id="containerlogin" class="lastStep">

          <h2 class="">Casi lista...</h2>
          <div class=" row justify-content-center">
            <p class="text-center col-md-8 subtitulo"> Ya sea que comprés o vendás, es importante que otras closeteras puedan reconocerte. Subí una foto</p>
          </div>
          
          <div class="row justify-content-center" >
              <div class="" >
                  <span id="erroravatar"></span>
              </div>
          </div>
          <div class="form-group row justify-content-center">
              <div class="col-md-12 offset-md-4 row justify-content-center">
                  <button type="button" id="alt-avatar" class="registerbutton v2">Subir foto...</button>
                  <input  type="file" id="avatar" style="opacity: 0;width: 157px; height: 39px;" />
              </div>
          </div>
          <br/>
          <div class=" row justify-content-center">
            <p class="text-center col-md-6 subtitulo">
                Si no tenés una foto ahora, podés continuar con el proceso aquí. Pero te recordamos que sin
                foto te será difícil comprar o vender :)
            </p>

          </div>

          <div class="col-md-12 offset-md-4 row justify-content-center" style="display: none;">
              <button type="button" class="registerbutton">Finalizar</button>
          </div>
      </div>
    </div>
</div>
</main>
<footer>
<div class="f-container" >

    <img class="f-icon" src="./iconos/closeteria-logo-horizontal.png"/>

    <div class="fcontainer">
        <div class="">
            <a class="f-link" href="terms.html">Terminos y Condiciones</a>
        </div>

        <div class="">
            <a class="f-link"  href="#">¿Cómo funciona?</a>
        </div>

        <div class="">
            <a class="f-link" href="#">Tutoriales</a>
        </div>

        <div class="">
            <a class="f-link" href="politics.html">Politicas de privacidad</a>
        </div>
        <div class="">
            <a class="f-link" href="#">Vender en Closeteria</a>
        </div>

        <div class="">
            <a class="f-link"  href="#">Contactenos</a>
        </div>
    </div>

    <div class="fapps">
        <div class="">
            <a href="#"><img src="./iconos/applay2.1.png"/></a>
        </div>
        <div class="">
            <a href="#"><img src="./iconos/applay2.2.png"/></a>
        </div>
    </div>
</div>
</footer>
<div id="modal" class="mfp-hide">
<h2>Buscar</h2>
<div class="search">
    <input type="search" placeholder="Buscar...">
    <button type="button"><i class="fas fa-search"></i></button>
</div>
</div>

<script src="js/general.js"></script>

	
</body>
</html>