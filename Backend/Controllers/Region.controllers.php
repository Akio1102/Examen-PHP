<?php
header("Content-Type: application/json");

require_once("../Models/Region.php");
$region = new Region();

$body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetAll':
            $datos = $region->getRegiones();
            echo json_encode($datos);
        break;

        case 'GetId':
            $datos = $region->getRegion($body["id"]);
            echo json_encode($datos);
        break;

        case "Post":
            $datos=$region->postRegion($body["name"],$body["idD"]);
            echo json_encode($datos);
        break;

        case "Put":
            $datos=$region->update_region($body["id"], $body["name"],$body["idD"]);
            echo json_encode($datos);
        break;
        
        case "Delete":
            $datos=$region->deleteRegion($body["id"]);
            echo json_encode($datos);
        break;
        
        default:
            echo json_encode("EndPoint Invalid");
        break;
    }
?>