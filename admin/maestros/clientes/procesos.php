<?php
    include '../../../conexion.php';

    if ($_REQUEST['acc']=='tabla') {
        $arr = array('data'=> array());

        $sql = "SELECT documentoCliente,concat(primerNombre, ' ',primerApellido ) as Nombre, direccion, telefono,estado FROM clientes;";
        $respuesta = $conn->query($sql);


        if ($respuesta->num_rows > 0) {
            while ($row = $respuesta->fetch_assoc()) {
                // $data[] = $row;

            array_push($arr['data'],array(
                $row['documentoCliente'],
                $row['Nombre'],
                $row['direccion'],
                $row['telefono'],
                $row['estado'],
                "<a class='btn btn-warning btn-xs  tooltips' href='' onclick='seleccionarApuesta()' data-toggle='modal' data-target='#modalEditar' data-original-title='Editar' data-rel='tooltip' title='Editar' ><i class='fa fa-pencil'> </i></a>&nbsp&nbsp&nbsp&nbsp&nbsp
					<a class='btn btn-danger btn-xs  tooltips' href='' onclick='eliminarApuesta()' data-toggle='modal' data-target='' data-original-title='Eliminar' data-rel='tooltip' title='Eliminar' ><i class='fa fa-trash-o'> </i></a>"
            ));
            }
        }
        header('Content-type: application/json');
        echo json_encode($arr);
    }
?>
