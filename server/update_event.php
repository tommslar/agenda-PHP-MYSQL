<?php
  
// incluyo archivo conector, donde tengo todas las funciones php para las operaciones con la BD
include('conector.php');

// mantengo la sesión
session_start();

// si estoy logueado:
if (isset($_SESSION['username'])) {

	// armo un arreglo $dataUno, con los datos del primer usuario a cargar
	$data['eid'] = "'".$_POST['id']."'";
	$data['uid'] = "'".$_SESSION['uid']."'";
	$data['start'] = "'".$_POST['start_date']."'";
	$data['end'] = "'".$_POST['end_date']."'";
	$data['hora_i'] = "'".$_POST['start_hour']."'";
	$data['hora_f'] = "'".$_POST['end_hour']."'";


  //me conecto a la bd	
  $con = new ConectorBD('localhost', 'root', '');
  if ($con->initConexion('calendar')=='OK') {
  	if ($con->insertData('eventos', $data)) { // inserto el arreglo $data en la tabla eventos
        $response['msg']= 'OK';
    }else {
        $response['msg']= 'No se pudo realizar la inserción de los datos';
    }
  }  
}
else {
 $response['msg'] = "No se ha iniciado una sesión";
}


  echo json_encode($response);


 ?>
