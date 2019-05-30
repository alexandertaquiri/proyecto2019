<!DOCTYPE html>
<html>
<head>
	<title>Listar usuarios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrapValidator.min.css" rel="stylesheet">
    <link href="css/userProfile.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
   <div class="contenedor">
    <header>
        <div class="logo">
          <img width="80" src="imgs/registro.jpg">
        </div>
    </header>
   </div> 
   <div class="container">
   	<div class="row">
   		<div class="col-md-12">
   			<table class="table table-hover table-striped table-bordered">
   				<thead><h3>Listado de Usuarios<h3>
   					<tr>
   						<th>Nombre</th>
   						<th>Apellido</th>
   						<th>Dni</th>
   						<th>Fecha De Nacimiento</th>
   					</tr>
   				</thead>
   				<tbody id="contenido2">
   			    	
   				</tbody>
   				
   			</table>
   			
   		</div>
   		 <h2><a color="black" href=index.php>Volver</a></h2> 
   	</div>
   </div>

    <script type="text/javascript" src="js/metodo.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>

</body>
</html>