<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <!-- <script src="https://kit.fontawesome.com/2e11025811.js" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/b8b8963a3b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- <header>
        <nav>
            <a href="" class="logo">
                <img src="iconos/closeteria-logo-horizontal.png" alt="">
            </a>
            <div class="search">
                <input type="search" placeholder="Buscar...">
                <button type="button"><i class="fas fa-search"></i></button>
            </div>
            
        </nav>
    </header> -->
    <div class="sidebar sidebar-sell">
        <div class="logo-details">
            <img class="logo-banner" src="iconos/closeteria-logo-horizontal.png" alt="">
            <i class="fas fa-bars" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="home.html">
                    <i class="fas fa-home"></i>
                    <span class="links_name">Inicio</span>
                </a>
                <span class="tooltip">Inicio</span>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-user'></i>
                    <span class="links_name">Perfil</span>
                </a>
                <span class="tooltip">Perfil</span>
            </li>
            <li>
                <a href="sizes.html">
                    <i class='fas fa-ruler-combined'></i>
                    <span class="links_name">Mis tallas</span>
                </a>
                <span class="tooltip">Mis tallas</span>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-camera'></i>
                    <span class="links_name">Vender item</span>
                </a>
                <span class="tooltip">Vender item</span>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-shopping-bag'></i>
                    <span class="links_name">Mis compras</span>
                </a>
                <span class="tooltip">Mis compras</span>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-store'></i>
                    <span class="links_name">Mis ventas</span>
                </a>
                <span class="tooltip">Mis ventas</span>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-bell'></i>
                    <span class="links_name">Alertas</span>
                </a>
                <span class="tooltip">Alertas</span>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-heart'></i>
                    <span class="links_name">Favoritos</span>
                </a>
                <span class="tooltip">Favoritos</span>
            </li>
            <li>
                <a href="followers.html">
                    <i class='fas fa-user-friends'></i>
                    <span class="links_name">Seguidoras</span>
                </a>
                <span class="tooltip">Seguidoras</span>
            </li>
            <li>
                <a href="#">
                    <i class='fas fa-sign-out-alt'></i>
                    <span class="links_name">Salir</span>
                </a>
                <span class="tooltip">Salir</span>
            </li>

        </ul>
    </div>

    <section class="edit-section">
        <div class="home-content">
            <div class="profile-edit-head">
                <img class="profile-image" src="https://via.placeholder.com/50x50" />
            </div>
        </div>
    </section>

    <div class="container head-edit">
        <h2 class="edit-title head-title">Edit?? tu cuenta en Closeter??a</h2>
        <p class="info-edit">Ingres?? tus datos para crear tu cuenta. Si vas a vender, pod??s incluir tu informaci??n de una vez. <br> Todo esto podr??s cambiarlo despues en "Mi cuenta"</p>
    </div>

    <div class="form">
        <form>
            <h2 class="edit-title">Datos personales:</h2>

            <div class="container main-content">
                <div class="row container-form-user">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputUser">Usuario:</label>
                            <small id="userHelp" class="form-text text-muted">El usuario que usar??s en Closeter??a</small>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <input type="text" class="form-control" id="inputUser" aria-describedby="userHelp">
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputName">Nombre:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputLastName">Apellido:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <input type="text" class="form-control" id="inputLastName" aria-describedby="lastNameHelp">
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputPhone">Tel??fono:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <input type="text" class="form-control" id="inputPhone" aria-describedby="phoneHelp">
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputMail">Email:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <input type="email" class="form-control" id="inputMail" aria-describedby="mailHelp">
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputPassword">Contrase??a:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <input type="password" class="form-control" id="inputPassword" aria-describedby="passHelp">
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputPasswordAgain">Repet?? la contrase??a:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <input type="password" class="form-control" id="inputPasswordAgain" aria-describedby="passHelp">
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <img class="profile-image" src="https://via.placeholder.com/75x75" />
                        </div>
                    </div>
                    <div class="col-sm input-form btn-container-accept">
                        <div class="form-group-edit">
                            <button type="button" class="btn btn-primary btn-modify">Modificar tu foto de perfil</button>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="edit-title">Direcci??n:</h2>

            <div class="container main-content">
                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="formControlSelectProvincia">Provincia:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <select class="form-control" id="formControlSelectProvincia">
                                <option disabled selected>Eleg?? la provincia</option>
                                <option>San Jos??</option>
                                <option>Alajuela</option>
                                <option>Heredia</option>
                                <option>Cartago</option>
                                <option>Guanacaste</option>
                                <option>Puntarenas</option>
                                <option>Lim??n</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputCanton">Cant??n:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <select class="form-control" id="inputCanton">
                                <option disabled selected>Eleg?? el Cant??n</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row container-form">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputDistrit">Distrito:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <select class="form-control" id="inputDistrit">
                                <option disabled selected>Eleg?? el distrito</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row container-form-text-area">
                    <div class="col-sm label-form">
                        <div class="form-group-edit">
                            <label for="inputAddress">Direcci??n:</label>
                        </div>
                    </div>
                    <div class="col-sm input-form">
                        <div class="form-group-edit">
                            <textarea class="form-control text-area-address" id="FormControlTxtAreaAddress" rows="4" placeholder="Direcci??n exacta"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container main-content-bank">
                <h2 class="edit-title-2">??Quer??s vender ropa de tu cl??set en Closeter??a? (Opcional)</h2>        
                <p class="info-edit-2">Estos datos solo necesit??s llenarlos si vas a vender en Closeter??a. Si solo vas a comprar NO es necesario.</p>
                <p class="info-edit-2">Esta es la informaci??n de la cuenta en la  que quer??s recibir tu dinero cuando se vendan tus productos. Siempre podr??s modificar esto despu??s en caso de que cambies de idea.</p>

                <div class="container main-content-2">
                    <div class="row container-form">
                        <div class="col-sm label-form">
                            <div class="form-group-edit">
                                <label for="formControlSelectBanco">Banco:</label>
                            </div>
                        </div>
                        <div class="col-sm input-form">
                            <div class="form-group-edit">
                                <select class="form-control" id="formControlSelectBanco">
                                    <option disabled selected>Eleg?? el banco</option>
                                    <option>BAC</option>
                                    <option>BCR</option>
                                    <option>BN</option>
                                    <option>BP</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row container-form">
                        <div class="col-sm label-form">
                            <div class="form-group-edit">
                                <label for="inputTitular">Titular de la cuenta (nombre):</label>
                            </div>
                        </div>
                        <div class="col-sm input-form">
                            <div class="form-group-edit">
                                <input type="text" class="form-control" id="inputTitular" aria-describedby="titularHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row container-form">
                        <div class="col-sm label-form">
                            <div class="form-group-edit">
                                <label for="inputCedula">N??mero de c??dula:</label>
                            </div>
                        </div>
                        <div class="col-sm input-form">
                            <div class="form-group-edit">
                                <input type="number" class="form-control" id="inputCedula" aria-describedby="cedulaHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row container-form">
                        <div class="col-sm label-form">
                            <div class="form-group-edit">
                                <label for="inputCuenta">N??mero de cuenta bancaria:</label>
                            </div>
                        </div>
                        <div class="col-sm input-form">
                            <div class="form-group-edit">
                                <input type="number" class="form-control" id="inputCuenta" aria-describedby="cuentaHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row container-form">
                        <div class="col-sm label-form">
                            <div class="form-group-edit">
                                <label for="inputIban">N??mero de cuenta IBAN:</label>
                            </div>
                        </div>
                        <div class="col-sm input-form">
                            <div class="form-group-edit">
                                <input type="number" class="form-control" id="inputIban" aria-describedby="ibanHelp">
                            </div>
                        </div>
                    </div>

                    <div class="row container container-logo">
                        <img class="image-logo" src="https://cdn.pixabay.com/photo/2015/05/26/09/37/paypal-784404_960_720.png" alt="PayPal logo" width="120">
                    </div>
                    
                    <div class="row container paypal-content">
                        <div class="col-sm">
                            <p class="info-edit-subtitle"> Opcional:</p>
                            <p class="info-paypal">Recib?? compras con tarjeta de cr??dito y los dep??sitos de Closeter??a <br> Solo deb??s tener una cuenta de www.PayPal.com <br> (Abrirla es gratis y pod??s recibir los pagos en tu cuentta bancaria)</p>
                        </div>
                    </div>

                    <div class="row container-form">
                        <div class="col-sm label-form">
                            <div class="form-group-edit">
                                <label for="inputPayPal">Cuenta en PayPal:</label>
                            </div>
                        </div>
                        <div class="col-sm input-form">
                            <div class="form-group-edit">
                                <input type="number" class="form-control" id="inputPayPal" aria-describedby="payPalHelp">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
            <h2 class="edit-title">Usuaria verificada (opcional... pero muy recomendado):</h2>   

            <div class="container main-content">     
                <p class="info-edit-2">Para ofrecer la mejor experiencia y seguridad a compradoras y vendedoras, pod??s agregar la foto de tu c??dula (ambos lados) y quedar como "usuaria verificada". Record?? que cualquiera puede elegir no comprar o no vender si la otra persona no est?? verificada, as?? que para que no te qued??s sin alguna oportunidad, te sugerimos agregar las fotos.</p>
                <p class="info-edit-2">Si sos vendedora y alguno de tus productos es de una marca reconocida, es requisito que lo hagas. Esto lo pedimos para proteger a las compradoras de falsificaciones.</p>
            </div>

            <div class="container main-content-2 main-content-images">
                <div class="row container-add-images">
                    <div class="form-group-add">
                        <button type="button" class="btn btn-primary btn-add"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="form-group-add">
                        <button type="button" class="btn btn-primary btn-add"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="form-group-add">
                        <button type="button" class="btn btn-primary btn-camera"><i class="fas fa-camera"></i></button>
                    </div>
                </div>
            </div>

            <div class="container-btn">
                <button type="submit" class="btn btn-primary btn-accept-form">Aceptar</button>
            </div>
        </form>
    </div>

    <section class="footer"></section>

    <!--<footer>
        <div class="f-container" >

            <img class="f-icon" src="./iconos/closeteria-logo-horizontal.png"/>

            <div class="fcontainer">
                <div class="">

                    <a class="f-link" href="terms.html">Terminos y Condiciones</a>

                </div>

                <div class="">

                    <a class="f-link"  href="#">??C??mo funciona?</a>

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



            <div class="col-md-2">

                <div class="">

                    <a href="#"><img src="./iconos/applay2.1.png"/></a>

                </div>

                <div class="">

                    <a href="#"><img src="./iconos/applay2.2.png"/></a>

                </div>

            </div>
        </div>
    </footer> -->

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange();
        });

    </script>
    <script src="js/general.js"></script>
</body>

</html>