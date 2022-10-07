<?php

class Conexion{
    private $servidor_dbname = "mysql:host=localhost;dbname=myportafolio";
    private $user = "root";
    private $pass = "";
    private $conectar;

    public function __construct(){
        try {
            $this->conectar = new PDO($this->servidor_dbname,$this->user,$this->pass);
            $this->conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $error) {
            echo "hubo un error ".$error;
        }
    }

    public function InUpDelete($sql){
        $query_inupdelete = $this->conectar->exec($sql);
    }
    public function Consulta_A_Bd($sql){
        $consultor_bd = $this->conectar->prepare($sql);
        $consultor_bd->execute();

        $datos = $consultor_bd->fetchAll();

        return $datos;
    }
}