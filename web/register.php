<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closetería | Crear cuenta</title>
    <script src="https://kit.fontawesome.com/2e11025811.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                <li class="btnSearch"><a href="#modal" class="openPopupLink">
                        <figure><i class="fas fa-search"></i></figure><span>Buscar</span>
                    </a></li>
                <li><a href="">
                        <figure><i class="fas fa-heart"></i></figure><span>Mis likes</span>
                    </a></li>
                <li><a href="">
                        <figure><i class="fas fa-shopping-bag"></i></figure><span>Carrito</span>
                    </a></li>
                <li><a href="login.html">
                        <figure><i class="fas fa-user"></i></figure><span>Ingresar</span>
                    </a></li>
                <li class="hasmenu"><a>
                        <figure><img src="img/unknowuser.jpg" alt=""></figure><span>Cuenta</span>
                    </a>
                    <ul class="subMenu" style="display: none;">
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

        <form id="form" class="generalForm createAcount">

            <div class="" id="">
                <div class="container py-2 ">

                    <div class="row justify-content-center col-md-12">
                        <h1 class="row justify-content-center col-md-12">Creá tu cuenta en closetería.</h1><br />

                        <p class="row justify-content-center col-md-8 text-center ">Ingresá tus datos para crear tú
                            cuenta. si vas a vender, podés incluir tu información de una vez.Todo esto podrás cambiarlo
                            después en “Mi cuenta”</p>
                    </div>
                    <h2 class="row justify-content-start ">Datos Personales: </h2>
                </div>
            </div>


            <div class="container" id="">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="form-group row registro-margen-input">

                            <div class="col-md-4 col-form-label text-md-right  ">
                                <p class="label">Usuario:</p>
                                <small>El nombre que usarás</small>
                                <small>en Closetería</small>
                            </div>

                            <div class="col-md-4">
                                <input type="text" class="userInput" id="user" name="user" value="" />

                                <small id="nouser" class="registerfail"></small>
                                <i class="fas fa-check position-check"></i>
                                <i class="fas fa-times position-cross"></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right label">Nombre:</label>

                            <div class="col-md-4">
                                <input type="text" class="" id="name" name="name" value="" />
                                <small id="noname" class="registerfail"></small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right label">Apellido:</label>
                            <div class="col-md-4">
                                <input type="text" class="" id="surname" name="surname" value=""/>
                                <small id="nosurname" class="registerfail"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right label">Teléfono:</label>

                            <div class="col-md-4">
                                <input type="text" class="" id="phone" name="phone" value="" />
                                <small id="nophone" class="registerfail"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right label">Email:</label>
                            <div class="col-md-4">
                                <input type="email" class="" id="email" name="email" value="" />
                                <small id="noemail" class="registerfail"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right label">Contraseña:</label>
                            <div class="col-md-4">
                                <input type="password" class="" id="password" name="password" value="" />
                                <small id="nopassword" class="registerfail"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right label">Repetí Contraseña:</label>
                            <div class="col-md-4">
                                <input type="password" class="" id="password2" name="confirmpassword" value="" />
                                <small id="nopassword2" class="registerfail"></small>
                            </div>
                        </div>

                        <h2 class="row justify-content-start col-md-12">Dirección:</h2>

                        <p class="row justify-content-start col-md-12">Donde deseás recibir tus compras</p>
                        <br />

                        <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right label">Provincia:</label>
                            <div class="col-md-4">
                                <select type="text" class="register-form-control" id="province" name="province" value=""
                                    onchange="getCantons(value)">
                                    <option value="0">Seleccione la provincia</option>
                                    <?php
                                        $data = json_decode(file_get_contents("http://backend.closeteria.com/api/provinces"), true);
                                        $count_provinces = count($data["provinces"]);

                                        for( $i=0; $i<$count_provinces; $i++ ){ 
                                            echo "<option value=".$data["provinces"][$i]["id"].">".$data["provinces"][$i]["name"]."</option>";
                                        }                            

                                    ?>
                                </select>
                                <small id="noprovince" class="registerfail"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right label">Cantón:</label>
                            <div class="col-md-4">
                                <select type="text" class="register-form-control" id="canton" name="canton" value=""
                                    onchange="getDistricts(value)">
                                    <option value="0">Seleccione el cantón</option>
                                </select>
                                <small id="nocanton" class="registerfail"></small>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label class="col-md-4 col-form-label text-md-right label">Distrito:</label>
                            <div class="col-md-4">

                                <select type="text" class="register-form-control" id="district" name="district" value="">
                                    <option value="0">Seleccione el distrito</option>
                                </select>
                                <small id="nodistrict" class="registerfail"></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 col-form-label text-md-right  ">
                                <p class="label">Dirección:</p>
                                <small>(Si tenés apartado</small>
                                <small>ponélo aquí)</small>
                            </div>
                            <div class="col-md-5">
                                <textarea type="textarea" class="register-form-control" id="direccion" name="address" value=""></textarea>
                                <small id="nodireccion" class="registerfail"></small>
                            </div>
                        </div>
                    </div>

                    <div class="row col-md-12">
                        <div class="dataPay">
                            <div>
                                <h2>¿Querés vender ropa de tu clóset en Closetería? (Opcional)</h2>
                                <p class=" text-justify">
                                    Estos datos solo necesitás llenarlos si vas a vender en Closetería).
                                    <strong> Si solo vas a comprar, no es necesario. </strong>
                                    Esta es la información de la cuenta en la que querés recibir tu dinero cuando se
                                    vendan tus productos.
                                </p>
                                </br></br>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-5 col-form-label text-md-right label">Banco:</label>
                                <div class="col-md-4 ">
                                    <select type="text" class="form-control" id="bank" name="bank_id" value="">
                                        <option value="0">Seleccione...</option>
                                        <?php
                                            $data = json_decode(file_get_contents("http://backend.closeteria.com/api/banks"), true);
                                            $count_banks = count($data["banks"]);

                                            for( $i=0; $i<$count_banks; $i++ ){ 
                                                echo "<option value=".$data["banks"][$i]["id"].">".$data["banks"][$i]["name"]."</option>";
                                            }                            
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-5 col-form-label text-md-right label">Titular de Cuenta
                                    (nombre):</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="titular" name="account_holder"
                                        value="" />
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-5 col-form-label text-md-right label">Tipo de cédula:</label>


                                <div class="col-md-3">

                                    <select type="text" class="form-control" id="tipocedula" name="document_type_id"
                                        value="">

                                        <option value="0">Seleccione tipo cédula</option>
                                        <?php
                                            $data = json_decode(file_get_contents("http://backend.closeteria.com/api/documenttypes"), true);
                                            $count_ids = count($data["documentTypes"]);

                                            for( $i=0; $i<$count_ids; $i++ ){ 
                                                echo "<option value=".$data["documentTypes"][$i]["id"].">".$data["documentTypes"][$i]["name"]."</option>";
                                            }                            
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">

                                <label class="col-md-5 col-form-label text-md-right label">Número de Cédula:</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="cedula" name="document" value="" />
                                    <small id="" class="registerfail"></small>
                                </div>

                            </div>



                            <div class="form-group row">

                                <label class="col-md-5 col-form-label text-md-right label">Número de Cuenta
                                    Bancaria:</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="nrocuenta" name="account_number"
                                        value="" />
                                    <small id="" class="registerfail"></small>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-md-5 col-form-label text-md-right label">Número de Cuenta
                                    IBAN:</label>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="nroiban" name="account_iban" value="" />
                                    <small id="" class="registerfail"></small>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <img src="iconos/paypalicon.png" class="paypalicon" />
                            </div>

                            <br />
                            <p class="row justify-content-center col-md-12 align-items-center ">
                                <strong> Opcional:</strong> Recibí compras con tarjeta de crédito los depósitos de
                                Closetería.
                            </p>
                            <p class="row justify-content-center col-md-12">Sólo debes tener una cuenta de
                                www.paypal.com</p>

                            <p class="row justify-content-center col-md-12 ">
                                (Abrirla es gratis y podés Recibir los pagos en tu cuenta Bancaria)
                            </p>
                            </br>
                            <div class="form-group row">
                                <label class="col-md-5 col-form-label text-md-right">Cuenta PayPal:</label>

                                <div class="col-md-3">
                                    <input type="email" class="form-control" id="" name="account_paypal" />
                                    <small id="" class="registerfail"></small>
                                </div>
                            </div>
                            <br />
                        </div>


                        <div class="userVerify">

                            <h2 class="">Usuaria verificada (opcional):</h2>

                            <p class="">Para ofrecer la mejor experiencia y seguridad a compradoras y vendedoras,podés
                                agregar la foto de tu cédula (ambos lados) y quedar como “usuaria verificada”.Recordá
                                que cualquiera puede elegir no comprar o no vender si la otra persona no está
                                verificada, así que para que no te quedés sin alguna oportunidad, te sugerimos agregar
                                las fotos.
                            <p>Si sos vendedora y alguno de tus productos es de una marca reconocida, es requisito que
                                lo hagás.</p>
                            <p>Esto lo pedimos para proteger a las compradoras de falsificaciones.</p>
                            </br>
                            <input type="file" id="front" class="hiddeninputfile" name="document_photo_front" />
                            <input type="file" id="reverse" class="hiddeninputfile" name="document_photo_reverse" />

                            <br /><br />
                            <div class="form-group row justify-content-center col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row justify-content-center col-xs-12 col-sm-4 col-md-3">
                                    <a id="alt-front" class="form-control frontimage"><img src="iconos/cruz.png"
                                            class="cruz" /><img id="frontpre" /></a>
                                </div>
                                <div class="form-group row justify-content-center col-xs-12 col-sm-4 col-md-3">
                                    <a id="alt-reverse" class="form-control reverseimage "><img src="iconos/cruz.png"
                                            class="cruz" /><img id="reversepre" /></a>
                                </div>
                            </div>
                            <br /><br />

                            <div class="form-group row col-md-12 justify-content-center">

                                <div class="col-md-12 row justify-content-center">

                                    <button type="button" class="registerbutton" onclick="verifyForm('form')">
                                        Aceptar
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </main>
    <footer>
        <div class="f-container">
            <img class="f-icon" src="./iconos/closeteria-logo-horizontal.png" />
            <div class="fcontainer">
                <div class="">
                    <a class="f-link" href="terms.html">Terminos y Condiciones</a>
                </div>

                <div class="">
                    <a class="f-link" href="#">¿Cómo funciona?</a>
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
                    <a class="f-link" href="#">Contactenos</a>
                </div>

            </div>

            <div class="fapps">
                <div class="">
                    <a href="#"><img src="./iconos/applay2.1.png" /></a>
                </div>

                <div class="">
                    <a href="#"><img src="./iconos/applay2.2.png" /></a>
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
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#province').val(0);
            $('#canton').val(0);
            $('#districts').val(0);
        })
    </script>

</body>

</html>