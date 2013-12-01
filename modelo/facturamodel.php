<?php

  require_once 'conexion.php';
  
    class LoginModel{
        
        public $conexion;
        
        public function __construct() {
            
            $this->conexion = new Conexion();
        }  
        
        
        
        public function buscarProductos (){
            
            $query="SELECT * FROM productos";
             $resultados = $this->conexion->get_resultados_query($query);
            
            
            
            return $resultados;
        }


    }
    


?>
