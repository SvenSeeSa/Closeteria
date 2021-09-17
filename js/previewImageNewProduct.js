
$(document).on("click","#add-image",function(){//en laza el boton de agregar imagen con el input
	$("#image").click();   
});

 // se encarga de cargar las imagenes
        
var arr = []; // esta variable podra ser visto en la funcion de react

var idImagenes = []; // los id de cada imagen para ser borradas luego de registrar producto en react
var id = 0;
//var formData = new FormData();

$(document).on("change", "#image", function(){
  //console.log(this.files);

	//for( var pair of formData.entries() ){ //borro los datos que estaban antes en el formdata y mas abajo los vuelvo a ingresar para que no se dupliquen               
	  //arr.splice(pair[1],1);
	//}

	var files = this.files;console.log("this..");console.log(files);
	var element;
	var supportImages = ["image/jpeg", "image/png", "image/jpg"];
	var seEncontraronElementoNoValidos = false;

	if(files.length >= 1 && files.length <= 7){

		for (var i = 0; i < files.length; i++){

			  element = files[i];

			  if( supportImages.indexOf(element.type) != -1){
				
				id = getRandomString(7);// la funcion de abajo

				//guardare los id de las imagenes en el arreglo           
				idImagenes.push(id);
			   
				createPreview(element,id);  // es la funcion createPreview que esta en el script de abajo
				//formData.append(id,element); 
			  
			  } else {
				seEncontraronElementoNoValidos = true;
			  }


		}


		//for( var pair of formData.entries() ){
			//arr.push(pair[1]);
		//}

	}

	if(seEncontraronElementoNoValidos){
		console.log("se encontraron archivos no validos");  
	} else {
		console.log("Todos los archivos se subieron"); 
	}

 }); 


 function getRandomString(length){//crear id aleatorios para eliminar imagenes
        
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for(var i = 0; i < length; i++)
     
     text += possible.charAt(Math.floor(Math.random() * possible.length));
     
  return text; 
  
}


function createPreview(file, id){
  var imgCodified = URL.createObjectURL(file);
  //var img = $('<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12"><div class="image-container"><figure> <img src="'+ imgCodified+'" alt="foto del usuario"> <figcaption> <i class="icon-cross"></i></figcaption> </figure> </div></div>');
  var img = $('<div style="display:inline-block;" id="'+id+'"><img class="image-style" src="'+imgCodified+'" alt="foto del producto"><div class="image-cross"><span>x</span></div></div>');
  $(img).insertBefore("#seccion-imagenes");
}

//var arr = []; // esta variable podra ser visto en la funcion de react

//Esto es hacer click en la "X"
 $(document).on("click",".image-cross", function(e){

	//for( var pair of formData.entries() ){                   
		//arr.splice(pair[1],1);
	//}

	var parent = $(this).parent();
	var id = $(parent).attr("id");
	//formData.delete(id);  
	$(parent).remove(); 


	//for( var pair of formData.entries() ){                 
		//console.log(pair[0]);
		//console.log(pair[1]);
		//arr.push(pair[1]);  
	//}

});