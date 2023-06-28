<?php
header("Content-Type: application/json");

require_once("../Models/Camper.php");
$camper = new Camper();

$body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetAll':
            $datos = $camper->getCampers();
            echo json_encode($datos);
        break;

        case 'GetId':
            $datos = $camper->getCamper($body["id"]);
            echo json_encode($datos);
        break;

        case "Post":
            $datos=$camper->postCamper($body["name"],$body["lastName"],$body["date"],$body["idR"]);
            echo json_encode($datos);
        break;

        case "Put":
            $datos=$camper->putCamper($body["id"],$body["name"],$body["lastName"],$body["date"],$body["idR"]);
            echo json_encode($datos);
        break;
        
        case "Delete":
            $datos=$camper->deleteCamper($body["id"]);
            echo json_encode($datos);
        break;
        
        default:
            echo json_encode("EndPoint Invalid");
        break;
    }
?>