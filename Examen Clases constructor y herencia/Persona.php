<?php

class Persona{

    private  $ojos;
    private  $pelo;
    private  $estatura;
    private  $peso;
    private  $edad;
    private  $estadoCivil;
    private  $nombre;
    private  $apellido;
    private  $sexo;

    function __construct($nombre,$apellido,$ojos,$pelo,$estatura,$peso,$edad,$estadoCivil,$sexo){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->ojos=$ojos;
        $this->pelo=$pelo;
        $this->estatura=$estatura;
        $this->peso=$peso;
        $this->edad=$edad;
        $this->estadoCivil=$estadoCivil;
        $this->sexo=$sexo;
    }

    public function setOjos($ojos){
        $this->ojos=$ojos;
    }

    public function getOjos(){
        return $this->ojos;

    }

    public function setPelo($pelo){
        $this->pelo=$pelo;
    }

    public function getPelo(){
        return $this->pelo;
        
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
        
    }

    public function setApellido($apellido){
        $this->apellido=$apellido; 
    }

    public function getApellido(){
        return $this->apellido;
        
    }

    public function setEstatura($estatura){
        $this->estatura=$estatura;
    }

    public function getEstatura(){
        return $this->estatura;
        
    }

    public function setPeso($peso){
        $this->peso=$peso;
    }

    public function getPeso(){
        return $this->peso;
        
    }
   
    public function setEdad($edad){
        $this->edad=$edad;
    }

    public function getEdad(){
        return $this->edad;
        
    }

    public function setEstadoCivil($estadoCivil){
        $this->estadoCivil=$estadoCivil;
    }

    public function getEstadoCivil(){
        return $this->estadoCivil;
        
    }

    public function setSexo($sexo){
        $this->sexo=$sexo;
    }

    public function getSexo(){
        return $this->sexo;
        
    }

    /**
     * Funcion Objeto 
     * 
     */
    public function persona(Persona $person){
        
        if(is_object($person)){
            $persona="Hola!!<br> Yo soy ".$person->nombre." ".$person->apellido."<br>
            Mis ojos son: ".$person->ojos."<br>Mi Pelo es :".$person->pelo."<br> 
            Mi estatura es: ".$person->estatura."cm <br>Mi peso es:".$person->peso."<br> Mi edad es:".$person->edad."<br> 
            Mi estado civil es:".$person->estadoCivil."<br> Mi sexo es:".$person->sexo;
        }
        return $persona;

    }
    /**
     * Funcion para correr
     */
    public function correr(){
         
            $correr="La persona ".$this->nombre." ".$this->apellido." esta <b>corriendo</b>";
            return $correr;
    }
    /**
     * Function comer 
     */
    public function comer(){
        $comer="La persona ".$this->nombre." ".$this->apellido." esta <b>comiendo</b>";
        return $comer;
    }
    /**
     * Function dormir 
     */
    public function dormir(){
        $dormir="La persona ".$this->nombre." ".$this->apellido." esta <b>Durmiendo</b>";
        return $dormir;
    }
    /**
     * Function jugar 
     */
    public function jugar(){
        $jugar="La persona ".$this->nombre." ".$this->apellido." esta <b>Jugando</b>";
        return $jugar;
    }
    /**
     * Function caminar 
     */
    public function caminar(){
        $caminar="La persona ".$this->nombre." ".$this->apellido." esta <b>Caminando</b>";
        return $caminar;
    }
    /**
     * Function estudiando 
     */
    public function estudiando(){
        $estudiando="La persona ".$this->nombre." ".$this->apellido." esta <b>Estudiendo</b>";
        return $estudiando;
    }

     /**
     * Function programando 
     */
    public function programando(){
        $programando="La persona ".$this->nombre." ".$this->apellido." esta <b>Programando en PHP</b>";
        return $programando;
    }
  

    
    
   



}