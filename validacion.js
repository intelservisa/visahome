// JavaScript Document

function validacion(){ 
			var nombre = document.getElementById("Name").value;
			var direccion = document.getElementById("dire").value;
			var ciudad = document.getElementById("ciudad").value;
			var codigo = document.getElementById("cp").value;
			var ccnumber = document.getElementById("CardNumber").value;
			var cccvv = document.getElementById("Address1").value;
			
		if(nombre == ""){
			alert("Revise los datos ingresados y haga Click en siguiente.");
			return false;
		}
				if(direccion == ""){
			alert("Por favor ingrese la direccion de facturacion.");
			return false;
		}
				if(ciudad == ""){
			alert("Por favor ingrese su ciudad.");
			return false;
		}
				if(codigo == ""){
			alert("Por favor ingrese el codigo postal.");
			return false;
		}
				if(ccnumber == ""){
			alert("Por favor ingrese el numero de tarjeta.");
			return false;
		}
				if(cccvv == ""){
			alert("Por favor ingrese el codigo de seguridad de su tarjeta.");
			return false;
		}
		
}