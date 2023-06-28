<?php
require_once("../Config/Conexion.php");

class Departamento extends Conexion{

    public function __construct(){
        parent::__construct();
    }

    public function getDepartamento(){
        try {
            $sql = "SELECT d.idDep, d.nombreDep, d.idPais, p.nombrePais FROM departamento d INNER JOIN pais p ON d.idPais = p.idPais";
            $db = $this -> dbCnx -> prepare($sql);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getDepartamentos($id){
        try {
            $sql = "SELECT d.idDep, d.nombreDep, d.idPais, p.nombrePais FROM departamento d INNER JOIN pais p ON d.idPais = p.idPais WHERE d.idDep = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function postDepartamento($name,$idP){
        try {
            $sql = "INSERT INTO departamento (nombreDep,idPais) VALUES (:name,:idP)";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":name",$name);
            $db->bindParam(":idP",$idP);
            $db -> execute();
            return "Departamento Agregado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function putDepartamento($id,$name,$idP){
        try {
            $sql = "UPDATE departamento SET nombrePais = :name , idPais  = :idP WHERE idDep = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db->bindParam(":name",$name);
            $db->bindParam(":idP",$idP);
            $db -> execute();
            return "Departamento Modificado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteDepartamento($id){
        try {
            $sql = "DELETE FROM departamento WHERE idDep = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return "Departamento Eliminado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>