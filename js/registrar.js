function validareg()
 {	
	var cvalido=/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;  // para validar si es un correo electronico
   var nvalido=/\d/; // para validar que el primer caracter ingresado es una letra
   //variable numeros,
   var patron=/^\d{9}$/;
   var patron2=/^\d{8}$/;
   
   var espacios=false;
   var cont=0;

	if ((document.formulario.nombre.value.length == 0)) 
		{
			alert("INGRESE UN NOMBRE");
			document.formulario.nombre.focus();
			// sino se cumple la condicion
			return false;
	}
	else{
		  if ((document.formulario.apellido.value.length == 0) || ( nvalido.test(document.formulario.apellido.value)))
		  	{
					alert("APELLIDO erroneo!, Asegurese de no ingresar espacios en blanco");
					document.formulario.apellido.focus();
					//sino se cumple la condicion
					return false;
		 	 }
		 
		 	 else{
		 		 if ((document.formulario.dni.value.length == 0 ) || (!patron2.test(document.formulario.dni.value)))
		 		 	{
		 		 		alert("INGRESE UN DNI VALIDO ¡EXACTAMENTE 8 DIGITOS!");
		 		 		document.formulario.dni.focus();
		 		 					//sino cumple condicion
		 		 		return false;
		 		 	}	 
				else{
				     	        			
				    alert("FORMULARIO COMPLETO");
				    return true;
					
				}	

			}
		}

}						  					 