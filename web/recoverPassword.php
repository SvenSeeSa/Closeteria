<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closetería | Recuperar contraseña</title>
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
                <li><a href=""><figure><i class="fas fa-heart"></i></figure><span>Mis likes</span> </a></li>
                <li><a href=""><figure><i class="fas fa-shopping-bag"></i></figure><span>Carrito</span> </a></li>
                <li><a href="login.html"><figure><i class="fas fa-user"></i></figure><span>Ingresar</span> </a></li>
            </ul>
        </nav>
        <a href="javascript:void(0)" class="navBar"><i class="fas fa-bars"></i></a>
    </header>
    <main>
         <div id="containerlogin">
            <span class="errorlogin"></span>
                <div class="">
                    <span class="" id="error"></span>
                </div> 
                <form action="" class="generalForm">
                    <div class="recoverPass">
                        <div class="textForm xlMarg">
                            <p>No te preocupés, a todos nos pasa <i class="fas fa-smile-wink face-blink"></i></p>
                            <br>
                            <p>Escribí tu usuario o email para enviarte un link para que podás reiniciar tu password.</p>
                        </div>
                        <div class="boxf">
                            <label  class=" labelogin">Usuario o email:</label>
                            <input id="email" type="email" class="" name="email"  />
                        </div>

                        <div class="boxBtn">
                            <button type="submit" class="btnForm">
                                Recuperar password
                                <p class="preloader"></p>
                            </button>
                        </div>
                    </div>

                </form>
	      <h6 class=" loginregister">¿No tenés cuenta? <a href="register.html" class="loginregisterlink"> Creala aquí. </a> Es gratis.</h6>   
         </div>
    </main>
    <footer>
        <div class="f-container" >

            <img class="f-icon" src="./iconos/closeteria-logo-horizontal.png"/>
            <div class="fcontainer">
                <div class="">
                    <a class="f-link" href="terminos">Terminos y Condiciones</a>
                </div>

                <div class="">

                    <a class="f-link"  href="#">¿Cómo funciona?</a>

                </div>

                <div class="">

                    <a class="f-link" href="#">Tutoriales</a>

                </div>


                <div class="">

                    <a class="f-link" href="privacidad">Políticas de privacidad</a>

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

    <script src="js/general.js"></script>
</body>
</html>