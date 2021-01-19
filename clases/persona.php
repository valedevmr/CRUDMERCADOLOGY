<?php
    class Persona{
        
        private $nombre;
        private $apellido;
        private $ocupacion;
        private $edad;
        public $leer = "select * from CRUD";
        

        function setNombre($nombre){
            $this->nombre =  $nombre;
        }

        function getNombre(){
           return $this->nombre;  
        }

        function setApellido($apeliido){
            $this->apellido =  $apeliido;  
         }

         function getApellido(){
            return $this->apellido;  
         }

         function setOcupacion($ocupacion){
            $this->ocupacion = $ocupacion;  
         }

         function getOcupacion(){
            return $this->ocupacion;  
         }

         function setEdad($edad){
            $this->edad = $edad ;
         }

         function getEdad(){
             return $this->edad;
         }
    
         function leer($conn){
            $result = $conn->query($this->leer);
            if ($result->num_rows > 0) {

                $json = array();    
                while($row = $result->fetch_assoc()) {
                    array_push($json,$row);
                }   
                return $json;
            }
         }

         function insertar($conn){
                $sql  = "Insert into crud (nombre, apellidos, ocupacion, edad ) values('".$this->nombre."','".$this->apellido."','".$this->ocupacion."','".$this->edad."')";

                if ($conn->query($sql) === TRUE) {
                    return "exito";
                }
                else {
                    return "falso";
                }
         }
    
    }

?>