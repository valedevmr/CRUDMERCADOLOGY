<?php

    include("../configuracion/database.php");
    include("persona.php");

    $conexion =  new basedatos();
    $conexion->obtenerConexiuon();
    
    if(isset($_POST)){
        if($conexion->conn){
            if($_POST["peticion"]=="listar"){
            
                $PersonaObj =  new Persona();

                $retorno =  $PersonaObj->leer($conexion->conn);
                echo json_encode($retorno);
            }
            elseif($_POST["peticion"]=="insertar"){




                $PersonaObj =  new Persona();
                $PersonaObj-> setNombre($_POST["nombre"]);
                
                $PersonaObj-> setApellido($_POST["apellido"]);
                
                $PersonaObj-> setOcupacion($_POST["ocupacion"]);
                
                $PersonaObj-> setEdad($_POST["edad"]);
                
                $resultado = $PersonaObj-> insertar($conexion->conn);
                echo json_encode($resultado);
            
            }

        }
        
    }

    

?>