<?php
require_once("../Config/Conexion.php");

class Camper extends Conexion{

    public function __construct(){
        parent::__construct();
    }

    public function getCampers(){
        try {
            $sql = "SELECT c.idCamper,c.nombreCamper,c.apellidoCamper,c.fechaNac,c.idReg,r.nombreReg,r.idDep FROM campers c INNER JOIN region r ON c.idReg = r.idDep";
            $db = $this -> dbCnx -> prepare($sql);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getCamper($id){
        try {
            $sql = "SELECT c.idCamper,c.nombreCamper,c.apellidoCamper,c.fechaNac,c.idReg,r.nombreReg,r.idDep FROM campers c INNER JOIN region r ON c.idReg = r.idDep WHERE c.idCamper = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function postCamper($name,$lastName,$date,$idR){
        try {
            $sql = "INSERT INTO campers (nombreCamper,apellidoCamper,fechaNac,idReg) VALUES (:name,:sName,:date,:idR)";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":name",$name);
            $db->bindParam(":sName",$lastName);
            $db->bindParam(":date",$date);
            $db->bindParam(":idR",$idR);
            $db -> execute();
            return "Campers Agregado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function putCamper($id,$name,$lastName,$date,$idR){
        try {
            $sql = "UPDATE campers SET nombreCamper = :name , apellidoCamper = :sName , fechaNac = :date , idReg = :idR WHERE idCamper = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db->bindParam(":name",$name);
            $db->bindParam(":sName",$lastName);
            $db->bindParam(":date",$date);
            $db->bindParam(":idR",$idR);
            $db -> execute();
            return "Campers Modificado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteCamper($id){
        try {
            $sql = "DELETE FROM campers WHERE idCamper = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return "Campers Eliminado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>