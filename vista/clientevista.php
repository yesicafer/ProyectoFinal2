<?php
    class ClienteVista{    
        public function __construct() {
            ;
        }
       
        public function mostrarcliente(){
            $base = file_get_contents("../plantillas/base1.html");
            $entrar = file_get_contents("../plantillas/registrocliente.html");
            $base = str_ireplace('{contenido}', $entrar, $base);
            echo $base;
        }  
    } 
?>
