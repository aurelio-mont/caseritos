<?php


  $conn = new mysqli('127.0.0.1','root','root','caseritos');

  if (mysqli_connect_errno())
  {
    echo "Error al conectar: ", mysqli_connect_error();
    exit();
  }




?>
