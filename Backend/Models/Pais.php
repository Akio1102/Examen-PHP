<?php
require_once("../Config/Conexion.php");

class Pais extends Conexion{

    public function __construct(){
        parent::__construct();
    }

    public function getPaises(){
        try {
            $sql = "SELECT * FROM pais";
            $db = $this -> dbCnx -> prepare($sql);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getPais($id){
        try {
            $sql = "SELECT * FROM pais WHERE idPais = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return $db -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function postPais($name){
        try {
            $sql = "INSERT INTO pais (nombrePais) VALUES (:name)";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":name",$name);
            $db -> execute();
            return "Pais Agregado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function putPais($id,$name){
        try {
            $sql = "UPDATE pais SET nombrePais = :name WHERE idPais = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db->bindParam(":name",$name);
            $db -> execute();
            return "Pais Modificado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deletePais($id){
        try {
            $sql = "DELETE FROM pais WHERE idPais = :id";
            $db = $this -> dbCnx -> prepare($sql);
            $db->bindParam(":id",$id);
            $db -> execute();
            return "Pais Eliminado Exitosamente";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>