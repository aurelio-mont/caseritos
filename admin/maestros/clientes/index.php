<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Caseritos | Clientes</title>
	<link rel="stylesheet" href="../../../css/bootstrap.css">
	<link rel="stylesheet" href="../../../plugins/toastr/toastr.css">
	<link rel="stylesheet" href="../../../plugins/datatable/datatables.css">
	<link rel="stylesheet" href="../../../css/main.css">
</head>
<body>
<?php include "../../../menu.php"; ?>

<div class="container">
<!-- Modal nuevo empleado -->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog md" role="document">
        <div class="modal-content">
            <form method="post" action="#" id="frmClientes" name="frmClientes">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 id="myModalLabe"><strong>Nuevo Cliente</strong></h4>
                </div>
                <div class="modal-body">
				<small class="text-left">Lo campos con (<span style="color:red;">*</span>) son <b>obligatorios.</b></small><br><br>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="tipoDocumento">Tipo de documento <span style="color:red;">*</span></label>
								<select name="tipoDocumento" id="tipoDocumento" class="form-control input-sm text-uppercase" required>
									<option value="0">Seleciones el tipo de documento</option>
								</select>
							</div>
							<div class="form-group">
								<label for="primerNombre">Primer Nombre <span style="color:red;">*</span></label>
								<input type="text" class="form-control input-sm text-uppercase" id="primerNombre" name="primerNombre" placeholder="Primer Nombre">
							</div>
							<div class="form-group">
								<label for="primerApellido">Primer Apellido <span style="color:red;">*</span></label>
								<input type="text" class="form-control input-sm" id="primerApellido" name="primerApellido" placeholder="Primer Apellido">
							</div>
							<div class="form-group">
								<label for="telefono">Telefono <span style="color:red;">*</span></label>
								<input type="text" class="form-control input-sm" id="telefono" name="telefono" placeholder="Telefono">
							</div>
							<div class="form-group">
								<label for="fecha">Fecha de Nacimiento</label>
								<input type="date" class="form-control input-sm" id="fecha" name="fecha" placeholder="Fecha de Nacimiento">
							</div>
							<div class="form-group">
								<label for="departamento">Departamento <span style="color:red;">*</span></label>
								<select name="departamento" id="departamento" class="form-control input-sm">
									<option value="0">Seleciones el Departamento</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="numeroDocumento">Numero de Documento <span style="color:red;">*</span></label>
								<input type="text" class="form-control input-sm" id="numeroDocumento" name="numeroDocumento" placeholder="Numero de Documento">
							</div>
							<div class="form-group">
								<label for="segundoNombre">Segundo Nombre</label>
								<input type="text" class="form-control input-sm" id="segundoNombre" name="segundoNombre" placeholder="Segundo Nombre">
							</div>
							<div class="form-group">
								<label for="segundoApellido">Segundo Apellido</label>
								<input type="text" class="form-control input-sm" id="segundoApellido" name="segundoApellido" placeholder="Segundo Apellido">
							</div>
							<div class="form-group">
								<label for="direccion">Direccion <span style="color:red;">*</span></label>
								<input type="text" class="form-control input-sm" id="direccion" placeholder="Direccion">
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="email" class="form-control input-sm" id="email" name="email" placeholder="ejemplo@ejemplo.com">

							</div>
							<div class="form-group">
								<label for="ciudad">Ciudad <span style="color:red;">*</span></label>
								<select name="ciudad" id="ciudad" class="form-control input-sm">
									<option value="0">Seleciones la ciudad</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="genero">Genero <span style="color:red;">*</span></label>
						<select name="genero" id="genero" class="form-control input-sm">
							<option value="0">Selecionar</option>
						</select>
					</div>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success" onclick="insertar()">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--fin modal nuevo empleado-->
<button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalCliente">Crear nuevo cliente</button>
<br><br>
<table class="table table-hover data-table .active">
	<thead >
	 <tr style="background-color:#2c3e50; color:white;">
	 	<th style="width:10%;">Documento</th>
		<th>Nombre</th>
		<th>Dirección</th>
		<th>Telefono</th>
		<th>Estado</th>
		<th>Acción</th>
	 </tr>
	</thead>
	<tbody>

	</tbody>
</table>

</div>
</body>
<script src="../../../js/jquery.js"></script>
<script src="../../../js/bootstrap.js"></script>
<script src="../../../plugins/toastr/toastr.js"></script>
<script src="../../../plugins/datatable/datatables.js"></script>
<script src="../../../js/main.js"></script>
<script src="funciones.js"></script>
</html>
