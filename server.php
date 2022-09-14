<?php

include("condb.php");

// Consultamos los usuarios de la base de datos
$consulta_db = mysqli_query($connect, "SELECT * FROM $table_users");

$users = [];

while ($user = mysqli_fetch_array($consulta_db)) {
    $array_in_array = [
        'id' => $user['id'],
        'username' => $user['username'],
        'email' => $user['email']
    ];
    array_push($respuesta_final, $array_in_array);
}

// Avisamos que devolvemos un json
header( 'Content-Type: application/json' );

// Validamos el método y respondemos
$method = strtoupper($_SERVER['REQUEST_METHOD']);

switch ($method) {
    case 'GET':
        echo json_encode( $users );
        break;
    case 'POST':
        break;
}