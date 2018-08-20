<?php
// incluyo archivo conector, donde tengo todas las funciones php para las operaciones con la BD
include('conector.php');

// mantengo la sesión
session_start();

// si estoy logueado:
if (isset($_SESSION['username'])) {
  //me conecto a la bd	
  $con = new ConectorBD('localhost', 'root', '');
  if ($con->initConexion('calendar')=='OK') {
  	
  	
  	
  }  else {
   $response['msg'] = "No se ha iniciado una sesión";
}

  echo json_encode($response);




 ?>
