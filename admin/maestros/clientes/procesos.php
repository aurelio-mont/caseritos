<?php
    include '../../../conexion.php';



    if ($_REQUEST['acc']=='tabla') {

        $sql = "SELECT * FROM products";
        $respuesta = $conn->query($sql);
        $data = array();

        if ($respuesta->num_rows > 0) {
                while ($row = $respuesta->fetch_assoc()) {
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }
?>
