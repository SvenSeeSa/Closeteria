var globlalForm = {};
var textAreaGlobal = "";

function getCantons(id) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "https://backend.closeteria.com/api/province/" + id + "/cantons", true);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            $data_array = response;
            updateListCantons($data_array);
        }
    };
}

function updateListCantons($data_array) {

    document.getElementById("canton").innerHTML = "<option value=0> Seleccione el cantón </option>";
    var arr = $data_array["cantons"];

    for ($i = 0; $i < arr.length; $i++) {
        document.getElementById("canton").innerHTML += "<option value=" + $data_array["cantons"][$i]["id"] + ">" + $data_array["cantons"][$i]["name"] + "</option>";
    }

}

function getDistricts(id) {
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "https://backend.closeteria.com/api/canton/" + id + "/districts", true);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            $data_array_districts = response;
            updateListDistricts($data_array_districts);
        }
    };
}

function updateListDistricts($data_array_districts) {
    document.getElementById("district").innerHTML = "<option value=0> Seleccione el distrito </option>";
    var arr = $data_array_districts["districts"];

    for ($i = 0; $i < arr.length; $i++) {
        document.getElementById("district").innerHTML += "<option value=" + $data_array_districts["districts"][$i]["id"] + ">" + $data_array_districts["districts"][$i]["name"] + "</option>";
    }

}

function verifyForm(formId) {
    let formValues = {};
    var form1Inputs = document.forms[formId].getElementsByTagName("input");
    var textArea = document.getElementById("direccion").value;
    textAreaGlobal = textArea;
    var errorReg = false;

    for (let i = 0; i < form1Inputs.length; i++) {
        formValues[form1Inputs[i].name] = form1Inputs[i].value;
        globlalForm[form1Inputs[i].name] = form1Inputs[i].value;
    }

    console.log(globlalForm);

    if(formValues["user"] === '' || formValues["user"].trim() === ''){
        document.getElementById("nouser").innerHTML = "Selecciona un nombre de usuario";
        errorReg = true;
    }else if(formValues["user"].length < 4){
        document.getElementById("nouser").innerHTML = "Nombre de usuario muy corto, elija uno de 4 caracteres o más";
        errorReg = true;
    }else{
        document.getElementById("noname").innerHTML = "";
        verifyUser();
    }

    if(formValues["name"] === '' || formValues["name"].trim() === ''){
        document.getElementById("noname").innerHTML = "Digita tu nombre";
        errorReg = true;
    }else{
        document.getElementById("noname").innerHTML = "";
    }

    if(formValues["surname"] === '' || formValues["surname"].trim() === ''){
        document.getElementById("nosurname").innerHTML = "Digita tu apellido";
        errorReg = true;
    }else{
        document.getElementById("nosurname").innerHTML = "";
    }            

    if(formValues["phone"] === '' || formValues["phone"].trim() === ''){
        document.getElementById("nophone").innerHTML = "Digita tu número de teléfono";
        errorReg = true;
    }else{
        document.getElementById("nophone").innerHTML = "";
    }

    if(formValues["email"] === '' || formValues["email"].trim() === ''){
        document.getElementById("noemail").innerHTML = "Digita tu correo electrónico";
        errorReg = true;
    }else{
        verifyEmail();
        document.getElementById("noemail").innerHTML = "";
    }

    if(formValues["password"] === '' || formValues["password"].trim() === ''){
        document.getElementById("nopassword").innerHTML = "Digita tu una contraseña";
        errorReg = true;
    }else if(formValues["password"].trim().length<8){
        document.getElementById("nopassword").innerHTML = "La contraseña debe tener 8 caracteres como mínimo";
        errorReg = true;
    }else{
        document.getElementById("nopassword").innerHTML = "";
    }

    if(formValues["password"] != formValues["confirmpassword"]){
        document.getElementById("nopassword").innerHTML = "Las contraseñas no coinciden";
        document.getElementById("nopassword2").innerHTML = "Las contraseñas no coinciden";
        errorReg = true;
    }else{
        document.getElementById("nopassword").innerHTML = "";
        document.getElementById("nopassword2").innerHTML = "";
    }

    if(textArea === '' || textArea.trim() === ''){
        document.getElementById("nodireccion").innerHTML = "Digita una dirección";
        errorReg = true;
    }else{
        document.getElementById("nodireccion").innerHTML = "";
    }

    if(document.getElementById("province").value === "0"){
        errorReg = true;
        document.getElementById("noprovince").innerHTML = "Selecciona una provincia";
    }else{
        document.getElementById("noprovince").innerHTML = "";
    }

    if(document.getElementById("canton").value === "0"){
        errorReg = true;
        document.getElementById("nocanton").innerHTML = "Selecciona un cantón";
    }else{
        document.getElementById("nocanton").innerHTML = "";
    }

    if(document.getElementById("district").value === "0"){
        errorReg = true;
        document.getElementById("nodistrict").innerHTML = "Selecciona un distrito";
    }else{
        document.getElementById("nodistrict").innerHTML = "";
    }

    if(errorReg){
        alert("Algunos datos presentan problemas");
        window.scroll({
            top: 0, 
            left: 0, 
            behavior: 'smooth' 
        });
    }else{
        uploadProfile();
    }
}

function uploadProfile(){
    var ajax = new XMLHttpRequest();

    ajax.open("POST", "https://backend.closeteria.com/api/register?name="+
        globlalForm["name"]+"&surname="+
        globlalForm["surname"]+"&nickname="+
        globlalForm["user"]+"&email="+
        globlalForm["email"]+"&password="+
        globlalForm["password"]+"&address="+
        textAreaGlobal+"&province_id="+
        document.getElementById("province").value+"&canton_id="+
        document.getElementById("canton").value+"&district_id="+
        document.getElementById("district").value+"&bank_id="+
        document.getElementById("bank").value+"&account_holder="+
        globlalForm["account_holder"]+"&document_type_id="+
        document.getElementById("tipocedula").value+"&document="+
        globlalForm["document"]+"&account_iban="+
        globlalForm["account_iban"]+"&account_number="+
        globlalForm["account_number"]+"&account_paypal="+
        globlalForm["account_paypal"]+"&app=0", true);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if(response["status"] === "error"){
                document.getElementById("noemail").innerHTML = response["message"];
            }
        }
    };

    uploadPhotos();
}

function uploadPhotos(){
    var ajax = new XMLHttpRequest();

    ajax.open("POST", "http://backend.closeteria.com/api/profile/uploaddocuments?"+"document_photo_front="+
        globlalForm["document_photo_front"]+"&document_photo_reverse="+
        globlalForm["document_photo_reverse"],true);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if(response["status"] === "error"){
                document.getElementById("noemail").innerHTML = response["message"];
            }
        }
    };
}

function verifyEmail() {
    var email = document.getElementById("email").value;
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "https://backend.closeteria.com/api/verifyemail?email=" + email, true);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if(response["status"] === "error"){
                document.getElementById("noemail").innerHTML = response["message"];
            }
        }
    };
}

function verifyUser() {
    var username = document.getElementById("user").value;
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "https://backend.closeteria.com/api/verifyusername?nickname=" + username, true);
    ajax.send();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = JSON.parse(this.responseText);
            if(response["status"] === "error"){
                document.getElementById("nouser").innerHTML = response["message"];
            }
        }
    };
}