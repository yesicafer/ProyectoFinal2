<?php
    
    require_once 'conexion.php';

    class UsuarioModel{
        
        public $conexion;
        
        public function __construct() {
            
            $this->conexion = new Conexion();
        }
        
        
        public function get_combo(){
            
            $query = "SELECT * FROM rooles";
            return $this->conexion->get_resultados_query($query);
            
        }


        
        public function insertarusuario($id, $nombre, $pass, $slec){
   
               $query = "INSERT INTO usuario(id_usuario,idrool_usuario,nombre_usuario,contrasena_usuario) "
                . "VALUES ('$id','$slec','$nombre','$pass')";           
               
               
               return $this->conexion->ejecutar_query($query);
               
            
            
        }







        
        
        
    }





?>