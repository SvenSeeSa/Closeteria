<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender</title>
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

    <section class="home-section">
        <div class="home-content">

            <div class="profile-sell">
                <img src="https://via.placeholder.com/35x35" />
            </div>

            <div class="head">
                <br>
                <h1 class="head-title">Publicar producto para la vente en tu "cl??set" de Closeter??a</h1>
                <p class="head-subtitle">Vender en Closeter??a es f??cil. Solo deb??s agregar las fotos, llenar algunos
                    datos, y listo. Asegurate de tener tu informaci??n bancaria correcta. Esto lo pod??s revisar en tu
                    Perfil.</p>
            </div>

            <div class="head-advertisement">
                <div class="ad"><i class="fas fa-exclamation-triangle"></i></div>
                <p class="advertisement">Record?? que la descripci??n debe ser exacta. Si tu prenda tiene desperfectos,
                    deb??s incluirlos todas en las fotograf??as y la descripci??n. Si lo haces y hay reclamos o se piden
                    devoluciones, estar??s protegida.</p>
            </div>

            <div class="step-content">
                <h2 class="step-title">1-Agreg?? las fotograf??as de tu prenda</h2>
                <p class="step-text">Us?? buena iluminaci??n, p??nelas contra un fondo blanco o contra el que se vean los
                    detalles. Us?? fotos de distintos ??ngulos para que las compradoras tengan m??s informaci??n. Inclu??
                    cualquier imperfecci??n si es el caso.</p>
            </div>

            <div class="container btn-container">
                <button type="button" class="btn btn-primary"><i class="fas fa-cloud-upload-alt icon"></i>Sub?? tus
                    fotos</button>
                <p>o arrastralas</p>
            </div>

            <div class="step-content">
                <h2 class="step-title">2-Describ?? tu producto</h2>
                <form class="sell-form">
                    <div class="form-group form-group-2">
                        <label for="FormControlInputTitle">T??tulo</label>
                        <input class="form-control" id="FormControlInputTitle"
                            placeholder="??Qu?? vas a vender? (Requerido)">
                    </div>
                    <div class="form-group">
                        <label for="FormControlTextarea1">Descripci??n</label>
                        <textarea class="form-control" id="FormControlTextarea1" rows="3"
                            placeholder="Describ?? la prenda que vas a vender. Si es de segunda y tiene imperfecciones deb??s decirlo con detalle aqu??."></textarea>
                    </div>
                    <div class="form-group form-group-3">
                        <label for="FormControlSelect1">Categor??a</label>
                        <select class="form-control form-control-2" id="FormControlSelect1">
                            <option disabled selected>Eleg?? la categor??a</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <label for="FormControlSelect2"> </label>
                        <select class="form-control form-control-2">
                            <option disabled selected>Subcategor??a (opcional)</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group form-group-3">
                        <label for="FormControlSelectSize">Talla</label>
                        <select class="form-control form-control-2" id="FormControlSelectSize">
                            <option disabled selected>Eleg?? la talla</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group form-group-3">
                        <label for="FormControlSelectSize">Color (opcional)</label>
                        <select class="form-control form-control-2" id="FormControlSelectSize">
                            <option disabled selected>M??ximo 2</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group form-group-3">
                        <label for="FormControlInputTitle">Precio: ???</label>
                        <input class="form-control form-control-2" id="FormControlInputPrice">
                        <p class="input-text">Menos gastos de Closeter??a y costos de transacciones</p>
                    </div>

                    <div class="form-group form-group-3">
                        <label for="FormControlInputTitle">Ganancia: ???</label>
                        <input class="form-control form-control-2" id="FormControlInputPrice">
                    </div>

                    <div class="form-group form-group-3">
                        <label for="FormControlSelect1">Marca</label>
                        <select class="form-control form-control-2" id="FormControlSelect1">
                            <option disabled selected>Opcional</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <label for="FormControlSelect2">Condici??n</label>
                        <select class="form-control form-control-2" id="FormControlSelectCondition">
                            <option disabled selected>Eleg?? tu opci??n</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="form-group form-group-3">
                        <label for="FormControlInputTitle">Peso (en gramos): </label>
                        <input class="form-control form-control-2" id="FormControlInputPrice">
                    </div>

                    <div class="form-group form-group-3">
                        <label for="FormControlInputTitle">SKU:</label>
                        <input class="form-control form-control-2" id="FormControlInputPrice">
                    </div>
                    <p class="input-text-2">Un SKU es una referencia que le pod??s dar a tu producto para llevar un control interno. Esto NO se muestra en Closeter??a.</p>

                    <div class="container">
                        <button type="button" class="btn btn-primary btn-accept">Aceptar</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

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