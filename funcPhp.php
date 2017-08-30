<?php
 function consultar($tabla,$columnas){
    $sql = "SELECT {$columnas} FROM {$tabla}";
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
