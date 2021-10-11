<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closetería | Login</title>
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
                <li>
                    <a href="">
                        <figure><i class="fas fa-heart"></i></figure>
                        <span>Mis likes</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure><i class="fas fa-shopping-bag"></i></figure>
                        <span>Carrito</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <figure><i class="fas fa-user"></i></figure>
                        <span>Ingresar</span>
                    </a>
                </li>
            </ul>
            <a href="javascript:void(0)" class="navBar"><i class="fas fa-bars"></i></a>
        </nav>
    </header>
    <main>
         <div id="containerlogin">
            <span class="errorlogin"></span>
            <form action="/*javascript:(this.form)*/" class="generalForm">
                <div>
                    <div class="boxf">
                        <label  class=" labelogin">Usuario o email:</label>
                        <input id="email" type="email" class="" name="email"  />
                    </div>

                    <div class="boxf ">
                        <label  class=" labelogin">Password:</label>
                        <input id="password" type="password" class="" name="password" />
                        <a href="recoverPassword.html" class="loginforgotpass">¿Olvidaste tu password?</a>
                    </div>

                    <div class="boxBtn">
                        <button type="submit" class="btnForm">
                            Ingresar
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

                    <a class="f-link" href="terms.html">Terminos y Condiciones</a>

                </div>

                <div class="">

                    <a class="f-link"  href="#">¿Cómo funciona?</a>

                </div>

                <div class="">

                    <a class="f-link" href="#">Tutoriales</a>

                </div>


                <div class="">

                    <a class="f-link" href="politics.html">Políticas de privacidad</a>

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
    <script>


    /**
    
    
            if ( $('#form').validate().form() ) {
    
              const formData = new FormData();
    
    
    
              const config = {
    
                  headers: {
    
                      'content-type': 'application/json',
    
                      'Accept':'application/json'
    
                  }
    
              };
    
    
    
               // envio un json a la funcion para hacer login y asi inicio sesion
    
                var login = JSON.stringify({ email:this.state.formEmail, password:this.state.formPass});
    
                // login();
    
    
    
                $(".preloader").show();
    
    
    
                formData.append('json',login);
    
                axios.post('https://backend.closeteria.com/api/login',formData, config).then(response=>{
    
    
    
                    var token = response.data.token;// almacena el token en una variable
    
                    var decoded = jwt_decode(token);// decodifica el token
    
    
    
                    let id = JSON.stringify(decoded.sub);
    
                    let name = JSON.stringify(decoded.name).substring(1, JSON.stringify(decoded.name).length - 1);
    
                    let surname = JSON.stringify(decoded.surname).substring(1, JSON.stringify(decoded.surname).length - 1);
    
                    let email = JSON.stringify(decoded.email).substring(1, JSON.stringify(decoded.email).length - 1);
    
                    let nickname = JSON.stringify(decoded.nickname).substring(1, JSON.stringify(decoded.nickname).length - 1);
    
                    //let imageuser = JSON.stringify(decoded.image).substring(1, JSON.stringify(decoded.image).length - 1);
    
    
    
                    var id_sesion = localStorage.setItem("id_closeteria", id); 
    
                    localStorage.setItem("id_closeteria", id); 
    
                    localStorage.setItem("name", name);
    
                    localStorage.setItem("surname", surname);
    
                    localStorage.setItem("email", email);
    
                    localStorage.setItem("nickname", nickname);
    
                    localStorage.setItem("token", token);
    
                    //localStorage.setItem("imageuser", imageuser);
    
    
    
    
    
                    axios.get('https://backend.closeteria.com/api/userprofile/'+localStorage.getItem("nickname")).then(response=>{
    
    
    
                        localStorage.setItem("provincia",response.data.user.province.id);
    
                        localStorage.setItem("canton",response.data.user.canton.id);
    
                        localStorage.setItem("distrito",response.data.user.district.id);
    
                        localStorage.setItem("fotoAvatarPequena",response.data.user.image_small);
    
                        localStorage.setItem("esAdmin",response.data.user.is_admin);
    
    
    
                        if(response.data.user.is_admin == 1) {
    
                           top.location.href = 'ordenes';
    
                        } else {
    
                           top.location.href = 'dashboard';
    
                        }
    
                    }).catch(error=>{
    
                      //alert("error"+error); 
    
                    });
    
    
    
           
    
    
    
               }).catch(error=>{
    
                   $(".mc-alerta-error").show();
    
                   $("#error").text("Usuario o contraseña incorrecto");
    
                   setTimeout(function() {
    
                       $("#error").text("");
    
                       $(".mc-alerta-error").hide();
    
                   },3000)
    
                   $(".preloader").hide();
    
                   console.log(error.response.data.message);    
    
                 
    
                });
    
    
    
            }
    
    
    
    
      render();
    
          
    
    
    
        $(function () {
    
    
    
            jQuery.validator.addMethod("usuario", function(value, element) {
    
               return this.optional(element) || /^[a-z\d_.]{5,12}$/i.test(value);
    
            }, "Nombre de usuario inválido. Entre 5 y 12 caracteres: Nros, letras, . y _");
    
    
    
            jQuery.validator.addMethod("cedula", function(value, element) {
    
               return this.optional(element) || /^[0-9]{2,10}$/i.test(value);
    
            }, "Cédula inválida. Solo se permiten números con dígitos entre 2 y 10 caracteres.");
    
    
    
            jQuery.validator.addMethod("alfanumericos", function(value, element) {
    
               return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
    
            }, "Solo se permiten números y letras (Sin acentos ni letra Ñ).");
    
    
    
            jQuery.validator.addMethod("letras", function(value, element) {
    
               return this.optional(element) || /^[a-zA-ZáéíóúÁÉÍÓÚ\ñ\Ñ\s]+$/i.test(value);
    
            }, "Solo se permiten letras.");
    
    
    
            jQuery.validator.addMethod("numeros", function(value, element) {
    
               return this.optional(element) || /^[0-9]+$/i.test(value);
    
            }, "Solo se permiten números.");
    
    
    
            jQuery.validator.addMethod("fecha", function(value, element) {
    
               return this.optional(element) || /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/.test(value);
    
            }, "Formato fecha: dd/mm/yyyy");
    
    
    
            jQuery.validator.addMethod("telefono", function(value, element) {
    
               return this.optional(element) || /^\+{0,1}[0-9]{6,14}$/i.test(value);
    
            }, "Solo se permiten números (mínimo 6) y el caracter + (opcional) para número de teléfono.");
    
    
    
            jQuery.validator.addMethod("cuentabancaria", function(value, element) {
    
               return this.optional(element) || /^[0-9]{14}$/i.test(value);
    
            }, "Solo se permiten números y 14 dígitos exactos para la cuenta bancaria.");
    
    
    
            jQuery.validator.addMethod("cuentaiban", function(value, element) {
    
               return this.optional(element) || /^([a-zA-Z]{2})([0-9]{1,22})?$/.test(value);
    
            }, "No cumple con el formato de Cuenta IBAN. Ejm: CR12345678901234");
    
    
    
            jQuery.validator.addMethod("clave", function(value, element) {
    
               return /^[A-Za-z0-9\d=!\-@#._*]*$/.test(value) // Acepta solo estos parámetros
    
               && /[A-Z]/.test(value) // una mayúscula
    
               && /[a-z]/.test(value) // una minúscula
    
               && /\d/.test(value) // un dígito
    
               && /[-@!#._*]/.test(value) // un caracter especial
    
            }, "Ingrese al menos una mayúscula, una minúscula, un número, un caracter especial -@!#._* y mínimo 6 caracteres, por ej. c1oS_1");
    
    
    
            $('#form').validate({
    
                rules: {
    
                    email: {
    
                        required: true,
    
                        email: true
    
                    }
    
                    ,
    
                    password: {
    
                        required: true
    
                    }
    
                },
    
                messages: {
    
                    email: {
    
                        required: "Tenés que ingresar un email",
    
                        email: "Formato correo: nombre@dominio.com"
    
                    }
    
                    ,
    
                    password: {
    
                        required: "Tenés que ingresar una contraseña"
    
                    }
    
                },
    
                highlight: function(element) {
    
                    $(element).closest('.form-group').addClass('is-invalid');
    
                    $(element).closest('.form-control').addClass('is-invalid');
    
                },
    
                unhighlight: function(element) {
    
                    $(element).closest('.form-group').removeClass('is-invalid');
    
                    $(element).closest('.form-control').removeClass('is-invalid');
    
                },
    
                errorElement: 'span',
    
                errorClass: 'help-block',
    
                errorPlacement: function(error, element) {
    
                    if(element.parent('.input-group').length) {
    
                        error.insertAfter(element.parent());
    
                    } else {
    
                        error.insertAfter(element);
    
                    }
    
                }
    
            });
    
            
    
        });
    
    
    
          
    
        //   return();



// if (document.getElementById('login')) {

//     // ReactDOM.render(<Login />, document.getElementById('login'));

// }*/
</script>
</body>
</html>