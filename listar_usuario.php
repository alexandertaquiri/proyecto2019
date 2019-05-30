
<div class="container">
   	<div class="row">
   		<div class="col-md-12">
   			<table  class="table table-hover table-striped table-bordered">
   				<thead><h3 id="titulo" style="color: black"></h3>
   					<tr>

   						<th scope="col">Nombre</th>
   						<th scope="col">Apellido</th>
   						<th scope="col">Dni</th>
   						<th scope="col">Fecha De Nacimiento</th>
   					</tr>
   				</thead>
   				<tbody id="contenido" >
				</tbody>
   			</table>
   			
   		</div>
   		 <h2><a href=index.php>Volver</a></h2> 
   	</div>

    <!– Formulario de registro ->
    <div class="modal fade" id="modal" data-backdrop="static" data-keyboard="false" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="glory"><span class="glyphicon glyphicon-link"></span> Registrar</h4> 
          </div>

           <div class="modal-body bg-body">
            <div class="panel panel-default">
              <div class="panel-body">

                <form   id="formulario" name="formulario" method="POST" >
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                    <label for="pwd">Nombre:
                    <input type="title" name="nombre" class="form-control" required="required" pattern="[a-zA-Z]{2,20}" title="Ingrese sólo letras, al menos dos."></label>
                  </div>  
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                    <label for="pwd">Apellido:
                    <input type="title" name="apellido" class="form-control" required="required" pattern="[a-zA-Z]{2,20}" title="Ingrese sólo letras, al menos dos."></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                    <label for="pwd">DNI:
                    <input type="text" name="dni" class="form-control" maxlength="8" required="required"></label>
                    </div>
                  </div> 
                  <div class="form-group">
                    <div class="col-md-6 center-block">
                      <label for="exp"><span class="glyphicon glyphicon-calendar"></span>Fecha De Nacimiento</label>
                      <input  name="fecha" type="date" class="form-control" required>
                    </div>  
                  </div>
        
                  
                   <div class="form-group">
                      <div class="col-md-6 center-block">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancelar </button>
                        <button type="submit" class="btn btn-success" value="submit"> Registrar</button>
                      </div>
                    </div>
                </form>
                
              </div>
            </div>
          </div>
      </div>
        
    </div>
   </div> 
</div>