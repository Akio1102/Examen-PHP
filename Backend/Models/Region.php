<?php
/* ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL); */

require_once("../Config/Conexion.php");

class Region extends Conexion{

    public function __construct(){
        parent::__construct();
    }

    public function getRegiones(){
        try {
            $sql = "SELECT r.idReg,r.nombreReg,r.idDep,d.nombreDep,d.idPais FROM region r INNER JOIN departamento d ON r.idDep = d.idDep";
            $db = $this -> dbCnx -> prepare($sql);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getRegion($id){
        try {
            $sql = "SELECT r.idReg,r.nombreReg,r.idDep,d.nombreDep,d.idPais FROM region r INNER JOIN departamento d ON r.idDep = d.idDep  WHERE r.idReg = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function postRegion($name,$idD){
        try {
            $sql = "INSERT INTO region (nombreReg,idDep) VALUES (:name,:idD)";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":name",$name);
            $db->bindParam(":idD",$idD);
            $db -> execute();
            return "Region Agregado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function putRegion($id,$name,$idD){
        try {
            $sql = "UPDATE region SET nombreReg = :name , idDep  = :idD WHERE idReg = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db->bindParam(":name",$name);
            $db->bindParam(":idD",$idD);
            $db -> execute();
            return "Region Modificado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteRegion($id){
        try {
            $sql = "DELETE FROM region WHERE idReg = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return "Region Eliminado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>