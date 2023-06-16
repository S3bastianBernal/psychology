<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

require_once("../config/conectar.php");
require_once("../models/Persona.php");

$persona = new Persona();

$body = json_decode(file_get_contents("php://input"),true);

switch ($_GET["op"]) {
    case 'GetAll':
        $datos = $persona -> get_persona();
        echo json_encode($datos);
        break;
    
    case 'GetId':
        $datos = $persona -> get_persona_id($body['id_persona']);
        echo json_encode($datos);
        break;
    case 'insert':
         $datos = $persona->insert_persona($body["id_persona"],$body["nombre"],$body["telefono"],$body["correo"],$body["foto"],$body["documento"], $body["tipo_documento"],$body["tipo_persona"]);
         header('Location: http://localhost/ArTeM01-054/psychology/psychology/users');
        break;
}

?>