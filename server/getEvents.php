<?php
// llamo al archivo donde tengo las funciones
require('conector.php');

// mantengo la sesión
session_start();


// si estoy logueado:
if (isset($_SESSION['username'])) {
  //me conecto a la bd	
  $con = new ConectorBD('localhost', 'root', '');
  if ($con->initConexion('calendar')=='OK') {
    $resultado = $con->consultar(['eventos'], ['*'], "WHERE uid ='".$_SESSION['uid']."'"); // filtro eventos x usuario
    $i=0;
    while ($fila = $resultado->fetch_assoc()) { // guardo resultado de cada fila en $response['eventos'] 
      $response['eventos'][$i]['eid']=$fila['eid'];
      $response['eventos'][$i]['uid']=$fila['uid'];
      $response['eventos'][$i]['title']=$fila['title'];
      $response['eventos'][$i]['start']=$fila['start'];
      $response['eventos'][$i]['end']=$fila['end'];
      $response['eventos'][$i]['completo']=$fila['completo'];
      $response['eventos'][$i]['hora_i']=$fila['hora_i'];
      $response['eventos'][$i]['hora_f']=$fila['hora_f'];
    $i++;
    }
    $response['msg'] = "OK";
  } else {
     $response['msg'] = "No se pudo conectar a la Base de Datos";
  }
}  else {
   $response['msg'] = "No se ha iniciado una sesión";
}

  echo json_encode($response);

 ?>
