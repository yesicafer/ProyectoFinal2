<?php

    require_once 'conexion.php';
    
    

    class LoginModel{
        
        public $conexion;
        
        public function __construct() {
            
            $this->conexion = new Conexion();
        }  
        
        
        public function login($usuario, $pass){
            
            $query = "SELECT id_usuario, contrasena_usuario 
                    FROM facturacion.usuario
                    where id_usuario = '".$usuario."' and contrasena_usuario= '".$pass."'";
            
            $resultados = $this->conexion->get_resultados_query($query);
            
            
            
            return $resultados;
            
        }
    }
    
    ?>