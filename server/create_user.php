<?php // crear 3 usuarios desde script

// incluyo archivo conector, donde tengo todas las funciones php para las operaciones con la BD
include('conector.php');


// armo un arreglo $dataUno, con los datos del primer usuario a cargar
$dataUno['uid'] = "'".'1'."'";
$dataUno['nombre'] = "'".'pepe luis'."'";
$dataUno['correo'] = "'".'pepe@gmail.com'."'";
$dataUno['password'] = "'".password_hash('12345', PASSWORD_DEFAULT)."'"; //12345
$dataUno['fecha_n'] = "'".'20/10/90'."'";

// armo un arreglo $dataDos, con los datos del segundo usuario a cargar
$dataDos['uid'] = "'".'2'."'";
$dataDos['nombre'] = "'".'maria'."'";
$dataDos['correo'] = "'".'maria@gmail.com'."'";
$dataDos['password'] = "'".password_hash('abcde', PASSWORD_DEFAULT)."'"; //abcde
$dataDos['fecha_n'] = "'".'10/12/91'."'";

// armo un arreglo $dataTres, con los datos del tercer usuario a cargar
$dataTres['uid'] = "'".'3'."'";
$dataTres['nombre'] = "'".'juano'."'";
$dataTres['correo'] = "'".'juano@gmail.com'."'";
$dataTres['password'] = "'".password_hash('54321', PASSWORD_DEFAULT)."'"; //54321
$dataTres['fecha_n'] = "'".'25/11/94'."'";


// me conecto a la base de datos
$con = new ConectorBD('localhost','root','');
$response['conexion'] = $con->initConexion('calendar');


// si la conexión es exitosa, inserto los datos de cada usuario
if ($response['conexion']=='OK') {

  if($con->insertData('usuarios', $dataUno) AND $con->insertData('usuarios', $dataDos) AND $con->insertData('usuarios', $dataTres)){ 
    $response['msg']="usuarios agregados de forma exitosa";
  }else {
    $response['msg']= "Hubo un error y los datos no han sido cargados";
  }
 
}else {
  $response['msg']= "No se pudo conectar a la base de datos";
}


// devuelvo el valor de $response
echo json_encode($response);


 ?>

