<?php
    class LoginVista{    
        public function __construct() {
            ;
        }
       
        public function mostrarlogin(){
            $base = file_get_contents("../plantillas/base1.html");
            $entrar = file_get_contents("../plantillas/login.html");
            $base = str_ireplace('{contenido}', $entrar, $base);
            echo $base;
        }  
    } 
?>
