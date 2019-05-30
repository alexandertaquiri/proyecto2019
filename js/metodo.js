document.addEventListener("DOMContentLoaded", function(event) { 

	document.getElementById('listUser').addEventListener("click", traer);
	document.getElementById('btn').addEventListener("click", traerTodos);
	document.getElementById('form').addEventListener("click", showModal);
	document.getElementById('formulario').addEventListener("submit", enviar);

  function enviar(){
		var url = 'alta_usuario.php';
		var data = new FormData(document.getElementById('formulario'));
		  fetch(url, {
		    method: 'post',
		    body: JSON.stringify(data)
		  }).then(function(response) {
		    return response.json();
		    alert('SOMETHING');
		  }).then(function(data) {
		    console.log('Created Gist:', data.html_url);
		    alert('NOTHING');
		  });
		      $.ajax({
            type: 'POST',
            url: 'alta_usuario.php',
            data: data,
            async: false,
            success: function (data) {
                alert(data);
                document.location.href = "index.php";
            },
            cache: false,
            contentType: false,   // by default jQuery sets this to urlencoded string
            processData: false  // do not process the data as url encoded params
        });
  }

 //funcion que trae los ultimos diez usuarios
 function traer(){
	fetch('mostrarUsuario.php')
	 .then(res => res.json())
	 .then( datos => {
	 	document.getElementById('titulo').innerHTML= 'Últimos 10 usuarios'
		tabla(datos)

	})
 }

 function tabla(datos){
 	var contenido = document.getElementById('contenido');
	contenido.innerHTML=''
	for (var i in datos) {
		contenido.innerHTML += `		
			
			<tr>
				<td>${datos[i].nombre}</td>
				<td>${datos[i].apellido}</td>
				<td>${datos[i].dni}</td>
				<td>${datos[i].fecha_nacimiento}</td>
			</tr>

		`
	}

 }

 //listar todos los usuarios
 function traerTodos(){
	fetch('mostrarTodosUsuarios.php')
	 .then(res => res.json())
	 .then( datos => {
	 	document.getElementById('titulo').innerHTML= 'Todos los usuarios'
		tabla(datos)

	})
 }

 	function showModal() {
 		$('#modal').modal('show');
 	}

});