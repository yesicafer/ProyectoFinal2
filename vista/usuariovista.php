<?php

    class usuariovista{
        
        
        public $base;
        public $entrar;
        
        
        public function __construct() {
            $this->base = file_get_contents("../plantillas/base1.html");
            $this->entrar = file_get_contents("../plantillas/registrousuario.html");
        }
        
        
        
        
        /**
         * 
         * @param array $datos
         */
        public function cargarcombo($datos){
            
            
            $combo ="";
            
            foreach($datos as $fila){
                
                $aux = '<option value="'.$fila['id_rool'].'">'.$fila['nombre_rool'].'</option>';
                
                $combo .=$aux;
            }
            
            $this->entrar = str_ireplace('{opciones}', $combo, $this->entrar);
            

            
        }

        
        
        public function mostrarUsuario(){

            $this->base = str_ireplace('{contenido}', $this->entrar, $this->base);
            
            echo $this->base;  
        }
        
        
        
        
        
    }
    
?>

