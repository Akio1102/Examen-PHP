<?php
header("Content-Type: application/json");

require_once("../Models/Pais.php");
$pais = new Pais();

$body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetAll':
            $datos = $pais->getPaises();
            echo json_encode($datos);
        break;

        case 'GetId':
            $datos = $pais->getPais($body["id"]);
            echo json_encode($datos);
        break;

        case "Post":
            $datos=$pais->postPais($body["name"]);
            echo json_encode($datos);
        break;

        case "Put":
            $datos=$pais->putPais($body["id"], $body["name"]);
            echo json_encode($datos);
        break;
        
        case "Delete":
            $datos=$pais->deletePais($body["id"]);
            echo json_encode($datos);
        break;
        
        default:
            echo json_encode("EndPoint Invalid");
        break;
    }
?>