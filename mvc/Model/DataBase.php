<?php

/**
 * Clase Conexion base de datos 
 * @author Josué Josaphat López Cerón
 * 
 */
class Database{
   
    //Variables de Clases
    private $host;
    private $driver;
    private $db;
    private $usuario;
    private $password;

    /**
     * Funcion Constructora
     * 
     */
    public function __construct(){
        $this->driver="mysql";
        $this->host="localhost";
        $this->db="controlticket";
        $this->usuario="root";
        $this->password="";        
    }

    /**
     * Funcion que permite conectar la base de datos 
     */
    public function conexion(){
        
        try {
            $conexion= new PDO("$this->driver:host=$this->host;dbname=$this->db;",$this->usuario,$this->password);    
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $ex) {
            echo "Error : ".$ex->getMessage();
        }

    }

    public function desconectar(){
        die();
    }


}