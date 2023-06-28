<?php
header("Content-Type: application/json");

require_once("../Models/Departamento.php");
$departamento = new Departamento();

$body = json_decode(file_get_contents("php://input"), true);

    switch ($_GET["op"]) {
        case 'GetAll':
            $datos = $departamento->getDepartamento();
            echo json_encode($datos);
        break;

        case 'GetId':
            $datos = $departamento->getDepartamentos($body["id"]);
            echo json_encode($datos);
        break;

        case "Post":
            $datos=$departamento->postDepartamento($body["name"],$body["idP"]);
            echo json_encode($datos);
        break;

        case "Put":
            $datos=$departamento->putDepartamento($body["id"],$body["name"],$body["idP"]);
            echo json_encode($datos);
        break;
        
        case "Delete":
            $datos=$departamento->deleteDepartamento($body["id"]);
            echo json_encode($datos);
        break;
        
        default:
            echo json_encode("EndPoint Invalid");
        break;
    }
?>