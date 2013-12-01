<?php
    require_once '../modelo/loginmodel.php';
    require_once '../vista/loginvista.php';
    
    class Login{
        
        public $modelo;
        public $vista;
        
        public function __construct() {
            $this->modelo = new LoginModel();
            $this->vista = new LoginVista(); 
            
        }
        
        public function mostrar(){ 
            $this->vista->mostrarLogin();
            
        } 
        
        public function loguiar($usuario, $pass){
            
            $reultados = $this->modelo->login($usuario, $pass);
            
            if($reultados){
                
                header('location: facturar.php');
            }else{
                
                echo '<script type="text/javascript">
                      alert("Error de login");
                    </script>';                  
                header('location: login.php');
            }
            
            
        }
        
        
    }
    
     
    $login = new Login();  
   
    if(isset($_POST['usuario'])){      
        
        $login->loguiar($_POST['usuario'], $_POST['password']);     

    }else{
        
      
        $login->mostrar();        
        
    }
    
    
    
    

          
       
   
      
   
    
   