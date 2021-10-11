<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closetería | Perfil</title>
    <script src="https://kit.fontawesome.com/2e11025811.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                
            </div>
            <ul>
                <li class="btnSearch"><a href="#modal" class="openPopupLink"><figure><i class="fas fa-search"></i></figure><span>Buscar</span> </a></li>
                <li><a href=""><figure><i class="fas fa-heart"></i></figure><span>Mis likes</span> </a></li>
                <li><a href=""><figure><i class="fas fa-shopping-bag"></i></figure><span>Carrito</span> </a></li>
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
        <div class="page-title text-center">Depósito/transferencia bancaria</div>

        <div class="payment-step-content payment-content">
           <h6>Resumen de tu compra: </h6>
           <div class="product-box">
                <div class="product-box-content">
                    <div class="col-1">
                        <img src="https://via.placeholder.com/90x90"></img>
                    </div>
                    
                    <div class="col-11">
                        <div class="row ml-1">
                            <div class="col">
                                <p class="float-left">Vestido Robert Rodgríguez negro talla 4</p>
                            </div>
                            <div class="col">
                                <p class="float-right">₡18.000</p>
                            </div>
                        </div>
                        <div class="row mt-2 ml-1">
                            <div class="col">
                                <p class="float-left">Transporte (Correos Costa Rica)</p>
                            </div>
                            <div class="col">
                                <p class="float-right">₡2.500</p>
                            </div>
                        </div>
                        <div class="row mt-2 ml-1">
                            <div class="col"></div>
                            <div class="col">
                                <p class="float-right"><strong>Total 20.500</strong></p>
                            </div>
                        </div>
                    </div>

                </div>
           </div>

           <div class="bank-box">
                <p>Seleccioná tu banco<p>
                <select name="experience">
                        <option value="Elegí una opción" disabled selected hidden> </option>
                        <option value="">Lorem ipsum dolor sit amet.</option>
                        <option value="">Lorem ipsum dolor sit amet.</option>
                        <option value="">Lorem ipsum dolor sit amet.</option>
                </select>
           </div>

            <div class="text-center mt-5">
                <btn type="button" class="btn btn-info"><span class="ml-4 mr-4">Ok</span></btn>
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