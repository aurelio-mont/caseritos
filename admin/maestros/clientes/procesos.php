<?php
    include '../../../conexion.php';
    //llenar tabla de clientes
    if ($_REQUEST['acc']=='tabla') {
        $arr = array('data'=> array());
        $sql = "SELECT documentoCliente,concat(primerNombre, ' ',primerApellido ) as Nombre, direccion, telefono,estado FROM clientes;";
        $respuesta = $conn->query($sql);
        if ($respuesta->num_rows > 0) {
            while ($row = $respuesta->fetch_assoc()) {
                array_push($arr['data'],array(
                    $row['documentoCliente'],
                    $row['Nombre'],
                    $row['direccion'],
                    $row['telefono'],
                    $row['estado'],
                    "<a class='btn btn-warning btn-xs  tooltips' href='' onclick='seleccionarApuesta()' data-toggle='modal' data-target='#modalEditar' data-original-title='Editar' data-rel='tooltip' title='Editar' ><i class='glyphicon glyphicon-pencil'> </i></a>&nbsp&nbsp&nbsp&nbsp
    					<a class='btn btn-danger btn-xs  tooltips' href='' onclick='eliminarApuesta()' data-toggle='modal' data-target='' data-original-title='Eliminar' data-rel='tooltip' title='Eliminar' ><i class='glyphicon glyphicon-trash'> </i></a>"
                ));
            }
        }
        header('Content-type: application/json');
        echo json_encode($arr);
    }

    //insertar
    if ($_REQUEST['acc']=='insertar') {
        $tipoDocumento   = $_POST['tipoDocumento'];
        $numeroDocumento = $_POST['numeroDocumento'];
        $primerNombre    = $_POST['primerNombre'];
        $segundoNombre   = $_POST['segundoNombre'];
        $primerApellido  = $_POST['primerApellido'];
        $segundoApellido = $_POST['segundoApellido'];
        $telefono        = $_POST['telefono'];
        $direccion       = $_POST['direccion'];
        $fecha           = $_POST['fecha'];
        $email           = $_POST['email'];
        $departamento    = $_POST['departamento'];
        $ciudad          = $_POST['ciudad'];
        $genero          = $_POST['genero'];
    }
?>
