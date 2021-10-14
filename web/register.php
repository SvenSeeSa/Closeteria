<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closetería | Crear cuenta</title>
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
                <input type="search" placeholder="Buscar...">
                <button type="button"><i class="fas fa-search"></i></button>
            </div>
            <ul>
                <li class="btnSearch"><a href="#modal" class="openPopupLink"><figure><i class="fas fa-search"></i></figure><span>Buscar</span> </a></li>
                <li><a href=""><figure><i class="fas fa-heart"></i></figure><span>Mis likes</span> </a></li>
                <li><a href=""><figure><i class="fas fa-shopping-bag"></i></figure><span>Carrito</span> </a></li>
                <li><a href="login.html"><figure><i class="fas fa-user"></i></figure><span>Ingresar</span> </a></li>
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

        <form  id="form" class="generalForm createAcount"> 

            <div class="" id=""> 
                <div class="container py-2 " >

                    <div class="row justify-content-center col-md-12">            
                        <h1 class="row justify-content-center col-md-12">Creá tu cuenta en closetería.</h1><br/>

                        <p class="row justify-content-center col-md-8 text-center " >Ingresá tus datos para crear tú cuenta. si vas a vender, podés incluir tu información de una vez.Todo esto podrás cambiarlo después en “Mi cuenta”</p>
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

                                <input  type="text" class="" id="user" name="user" value="" />

                                <small id="nouser" class="registerfail">El nombre de usuario no está disponible, por favor intentá con otro.</small>
                                <i class="fas fa-check position-check" ></i>
                                <i class="fas fa-times position-cross" ></i>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right label">Nombre:</label>

                            <div class="col-md-4">
                                <input  type="text" class="" id="name" name="name" value="" />
                                <span id="noname" class="registerfail"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right label">Apellido:</label>
                            <div class="col-md-4">
                                <input  type="text" class="" id="surname" name="surname" value="">
                                <span id="nosurname" class="registerfail"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right label">Teléfono:</label>

                            <div class="col-md-4">
                                <input  type="text" class="" id="phone" name="phone" value=""/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right label">Email:</label>
                            <div class="col-md-4">
                                <input  type="email" class="" id="email" name="email"value="" />
                                <span id="noemail" class="registerfail"></span>  
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right label">Contraseña:</label>
                            <div class="col-md-4">
                                <input  type="password" class="" id="password" name="password" value="" />
                                <span id="nopassword" class="registerfail"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right label">Repetí Contraseña:</label>
                            <div class="col-md-4">
                                <input  type="password" class="" id="password2" name="confirmpassword" value=""/>
                                <span id="nopassword2" class="registerfail"></span>
                            </div>
                        </div>

            <div id="este"></div> 

            <h2 class="row justify-content-start col-md-12">Dirección:</h2>

            <p class="row justify-content-start col-md-12">Donde deseás recibir tus compras</p>
            <br/>

            <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right label">Provincia:</label>
                <div class="col-md-3">
                    <select type="text" class="form-control" id="province" name="province_id" value="" onchange="getCantons(value)">
                        <option>Seleccione la provincia</option>
                        <?php
                            $data = json_decode(file_get_contents("http://backend.closeteria.com/api/provinces"), true);
                            $count_provinces = count($data["provinces"]);

                            for( $i=0; $i<$count_provinces; $i++ ){ 
                                echo "<option value=".$data["provinces"][$i]["id"].">".$data["provinces"][$i]["name"]."</option>";
                            }

                            // $select = $_POST['province_id'];
                            

                        ?>
                    </select>
                    <span id="noprovincia" class="registerfail"></span>                                
                </div>
            </div>
            
            <div class="form-group row">
                <label  class="col-md-4 col-form-label text-md-right label">Cantón:</label>
                <div class="col-md-3">
                    <select  type="text" class="form-control" id="canton" name="canton_id" value="">
                        <option>Seleccione el cantón</option>
                        <?php
                            $data = json_decode(file_get_contents("http://backend.closeteria.com/api/province/3/cantons"), true);
                            $count_cantons = count($data["cantons"]);

                            for( $i=0; $i<$count_cantons; $i++ ){ 
                                echo "<option>".$data["cantons"][$i]["name"]."</option>";
                            }

                        ?>
                    </select>
                    
                    <span id="nocanton" class="registerfail"></span>
                </div>
            </div>

            <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right label">Distrito:</label>
                <div class="col-md-3">

                    <select  type="text" disabled="disabled" class="form-control" id="distrito" name="district_id" value="">
                    <option>San Jerónimo</option>
                    <option>San Vicente</option>
                    <option>Trinidad</option>
                    </select>
                    <span id="nodistrito" class="registerfail"></span>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4 col-form-label text-md-right  ">
                    <p class="label">Dirección:</p>
                    <small>(Si tenés apartado</small>
                    <small>ponélo aquí)</small>
                </div>
                <div class="col-md-5">
                    <textarea  type="textarea" class="form-control" id="direccion" name="address" value="" ></textarea>
                    <span id="nodireccion" class="registerfail"></span>
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
                    Esta es la información de la cuenta en la que querés recibir tu dinero cuando se vendan tus productos.
                </p>
                </br></br>
            </div>  

              <div class="form-group row">
                <label  class="col-md-5 col-form-label text-md-right label" >Banco:</label>
                <div class="col-md-3 " >
                    <select  type="text" class="form-control" id="banco" name="bank_id" value="">
                     <option>Seleccione...</option>

                     <option value="1">Banco Nacional</option>

                     <option value="2">BAC</option>

                     <option value="3">Davivienda</option>

                    </select>                                
                </div>
              </div>



              <div class="form-group row">
                <label  class="col-md-5 col-form-label text-md-right label">Titular de Cuenta (nombre):</label>
                <div class="col-md-3">
                    <input  type="text" class="form-control" id="titular" name="account_holder" value=""/>
                </div>
              </div>



              <div class="form-group row">
                <label  class="col-md-5 col-form-label text-md-right label">Tipo de cédula:</label>


                <div class="col-md-3">

                    <select  type="text" class="form-control" id="tipocedula" name="document_type_id" value="">

                    <option >Seleccione tipo cédula</option>
                    <option value="1">Física</option>
                     <option value="2">Jurídica</option>
                    </select>
                </div>
              </div>



              <div class="form-group row">

                <label  class="col-md-5 col-form-label text-md-right label">Número de Cédula:</label>

                <div class="col-md-3">
                    <input  type="text" class="form-control" id="cedula" name="document" value=""/>                                
                    <span id="" class="registerfail"></span>
                </div>

              </div>



              <div class="form-group row">

                <label  class="col-md-5 col-form-label text-md-right label">Número de Cuenta Bancaria:</label>

                <div class="col-md-3">
                    <input  type="text" class="form-control" id="nrocuenta" name="account_number" value=""/>
                    <span id="" class="registerfail"></span>
                </div>
              </div>



              <div class="form-group row">
                <label  class="col-md-5 col-form-label text-md-right label">Número de Cuenta IBAN:</label>

                <div class="col-md-3">
                    <input  type="text" class="form-control" id="nroiban" name="account_iban" value=""/>                                
                    <span id="" class="registerfail"></span>
                </div>
              </div>

              <div class="row justify-content-center">
                <img src="iconos/paypalicon.png" class="paypalicon" />
              </div>

              <br/>
              <p class="row justify-content-center col-md-12 align-items-center ">
               <strong> Opcional:</strong> Recibí compras con tarjeta de crédito los depósitos de Closetería. 
            </p>
            <p class="row justify-content-center col-md-12">Sólo debes tener una cuenta de www.paypal.com</p>

              <p class="row justify-content-center col-md-12 ">
                (Abrirla es gratis y podés Recibir los pagos en tu cuenta Bancaria) 
              </p>
            </br>
              <div class="form-group row">
                <label  class="col-md-5 col-form-label text-md-right">Cuenta PayPal:</label>

                <div class="col-md-3">
                    <input  type="email" class="form-control" id="" name="account_paypal" /> 
                    <span id="" class="registerfail"></span>
                </div>
              </div>
           <br/>
          </div>


          <div class="userVerify">

              <h2 class="">Usuaria verificada (opcional):</h2>
                
                <p class="">Para ofrecer la mejor experiencia y seguridad a compradoras y vendedoras,podés agregar la foto de tu cédula (ambos lados) y quedar como “usuaria verificada”.Recordá que cualquiera puede elegir no comprar o no vender si la otra persona no está verificada, así que para que no te quedés sin alguna oportunidad, te sugerimos agregar las fotos.
                <p>Si sos vendedora y alguno de tus productos es de una marca reconocida, es requisito que lo hagás.</p>
                <p>Esto lo pedimos para proteger a las compradoras de falsificaciones.</p>
                </br>
                <input type="file" id="front" class="hiddeninputfile" name="document_photo_front" />
                <input type="file" id="reverse" class="hiddeninputfile" name="document_photo_reverse"/>

                <br/><br/>
                <div class="form-group row justify-content-center col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row justify-content-center col-xs-12 col-sm-4 col-md-3">
                        <a  id="alt-front"  class="form-control frontimage"><img src="iconos/cruz.png" class="cruz"/><img  id="frontpre"/></a>
                    </div>
                    <div class="form-group row justify-content-center col-xs-12 col-sm-4 col-md-3">
                        <a  id="alt-reverse" class="form-control reverseimage "><img src="iconos/cruz.png"  class="cruz"/><img id="reversepre"/></a>
                    </div>
                </div>
                <br/><br/>
                
                <div class="form-group row col-md-12 justify-content-center">
                    
                    <div class="col-md-12 row justify-content-center">
                        
                        <button type="button" class="registerbutton">
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

<script type="text/javascript">

    function getCantons(id){
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "https://backend.closeteria.com/api/province/"+id+"/cantons", true);
        ajax.send();

        ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                console.log(response);
                // var html = "<option>Select order</option>";
                // for (var a = 0; a < response.length; a++) {
                //     html += "<option value='" + response[a].orderNumber + "'>";
                //         html += response[a].orderNumber;
                //     html += "</option>";
                // }
                // document.getElementById("orders").innerHTML = html;
            }
        };
    }

</script>

</body>
</html>