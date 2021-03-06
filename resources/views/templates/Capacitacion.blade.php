<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
	$(document).ready(function() {
  	$("#boton_modal").click(function() {
    $('#mimodaltema').on('shown.bs.modal', function() {
      $('#primero').focus();
    })
  	});
	});
	</script>
	<title></title>
	<style type="text/css">
  		.modal-lg {
    			max-width: 65%  !important;
				   }
    </style>
</head>
<body>
<div class="container">
<h1>Formulario para Capacitaciones</h1>
<a href="index.html">Ventana Principal</a>
<hr>
<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#mimodalsolicitante" id="boton_modal">
Datos del Solicitante
</button>
&nbsp
&nbsp
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mimodalcontacto" id="boton_modal">
Datos del Contacto
</button>
<br>
<br>
<h2 style="text-align:center;text-decoration: underline;">Equipos que forman parte de la Cotizacion</h2>
<br>
<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#mimodalcurso" id="boton_modal">
Nuevo Curso a Cotizar
</button>
<br>
<br>
<table class="table table-bordered">
	<tr>
		<th class="text-center">Identificador</th>
		<th class="text-center">Nombre del Curso</th>
		<th class="text-center">Descripcion del Curso</th>
		<th class="text-center">Cantidad de Inscritos</th>
		<th class="text-center">Acciones</th>
	</tr>
	<tr>
		<td class="text-center">1</td>
		<td class="text-center">Circuitos Electricos</td>
		<td class="text-center">Descripcion de Circuitos Electricos...</td>
		<td class="text-center">5</td>
		<td class="text-center">
			<a class="btn btn-warning btn-sm" href="">Editar</a>
			<a class="btn btn-danger btn-sm" href="">Eliminar</a>
		</td>
	</tr>
	<tr>
		<td class="text-center">2</td>
		<td class="text-center">Dispositivos Electronico</td>
		<td class="text-center">Descripcion de Dispositivos Electronicos...</td>
		<td class="text-center">10</td>
		<td class="text-center">
			<a class="btn btn-warning btn-sm" href="">Editar</a>
			<a class="btn btn-danger btn-sm" href="">Eliminar</a>
		</td>
	</tr>
</table>

<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#mimodalcorreos" id="boton_modal">
Agregar Correos para enviar la Cotizacion
</button>
<br>
<br>
<br>
<center>
<button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#" id="boton_modal" style="width:40%;font-size:45px;font-weight:bold;">
Enviar Cotizacion
</button>
</center>
<br>
<br>
<br>
</div>




<!-- Button trigger modal -->


<!-- Modal Numero 1 -->
<div class="modal fade" id="mimodalsolicitante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
		
		<!-- formulario -->
		<div class="container">
		<h1 style="text-align: center">Agregar Solicitante de Cotizacion</h1>
		<hr>
		<form class="form-horizontal form-control" style="width:400px;height:590px;margin:0 auto">
		Nombre del Solicitante:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Tipo de Solicitante:
		<br>
		<select class="form-control">
  			<option value="volvo">Persona Juridica</option>
  			<option value="saab">Persona Natural</option>
		</select>
		RUC del Solicitante:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Direccion del Solicitante:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Telefono del Solicitante:
		<input class="form-control" type="text" name="" id="primero" />
		Email del Solicitante:
		<input class="form-control" type="text" name="" id="primero" />
		Nombre del Departamento:
		<br>
		<select class="form-control">
  			<option value="volvo">2020</option>
  			<option value="saab">2019</option>
		</select> 
		Nombre de la Provincia:
		<br>
		<select class="form-control">
  			<option value="volvo">2020</option>
  			<option value="saab">2019</option>
		</select> 
		Nombre del Distrito:
		<br>
		<select class="form-control">
  			<option value="volvo">2020</option>
  			<option value="saab">2019</option>
		</select> 
		<br>
		<input class="btn btn-primary btn-lg" type="submit" name="" value="Guardar" />
		</form>
		</div>
		<!-- formulario -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal Numero 2 -->
<div class="modal fade" id="mimodalcontacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
		
		<!-- formulario -->
		<div class="container">
		<h1 style="text-align: center">Agregar Contacto para la Cotizacion</h1>
		<hr>
		<form class="form-horizontal form-control" style="width:400px;height:280px;margin:0 auto">
		Nombre del Contacto:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Correo Electronico del Contacto:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Celular del Contacto:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		<br>
		<input class="btn btn-primary btn-lg" type="submit" name="" value="Guardar" />
		</form>
		</div>
		<!-- formulario -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal Numero 3 -->
<div class="modal fade" id="mimodalcurso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
		
		<!-- formulario -->
		<div class="container">
		<h1 style="text-align: center">Agregar Cursos a la Cotizacion</h1>
		<hr>
		<form class="form-horizontal form-control" style="width:400px;height:240px;margin:0 auto">
		Nombre del Curso:
		<select class="form-control">
  			<option value="volvo">Circuitos Electricos</option>
  			<option value="saab">Sistemas de Potencia</option>
		</select>
		<br>
		Cantidad de Estudiantes:
		<input class="form-control" type="text" name="" id="primero" />
		<br>
		<input class="btn btn-primary btn-lg" type="submit" name="" value="Guardar" />
		</form>
		</div>
		<!-- formulario -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal Numero 4 -->
<div class="modal fade" id="mimodalcorreos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
		
		<!-- formulario -->
		<div class="container">
		<h1 style="text-align: center">Lista de Correos a los que s enviara la Cotizacion</h1>
		<hr>
		<form class="form-horizontal form-control" style="width:400px;height:530px;margin:0 auto">
		Correo #1:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Correo #2:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Correo #3:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Correo #4:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Correo #5:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Correo #6:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		Correo #7:
		<br>
		<input class="form-control" type="text" name="" id="primero" />
		<br>
		<input class="btn btn-primary btn-lg" type="submit" name="" value="Guardar" />
		</form>
		</div>
		<!-- formulario -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


</body>
</html>