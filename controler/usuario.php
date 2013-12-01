<?php
    require_once '../modelo/usuariomodel.php';
    require_once '../vista/usuariovista.php';
    
    class Usuario{
        
        public $modelo;
        public $vista;
        
        public function __construct() {

            $this->vista = new usuariovista(); 
            $this->modelo = new UsuarioModel();
            
        }
        
        public function mostrar(){ 
            
            $this->vista->cargarcombo($this->modelo->get_combo());
            $this->vista->mostrarUsuario();
            
            
        } 
        
        public function insertarusuario($id, $nombre, $pass, $slec){
            
            $result = $this->modelo->insertarusuario($id, $nombre, $pass, $slec);
            
            if($result){
                echo '<script type="text/javascript">
                      alert("Insercion exitosa");
                    </script>';                   
                
            }else{
                
                echo '<script type="text/javascript">
                      alert("Error de login");
                    </script>';                  
                header('location: usuario.php');                
            }
            
        }
    }
    
    
    $usuario = new Usuario();
    
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        $slec=$_POST['seleccion'];
        
        $usuario->insertarusuario($id, $nombre, $pass, $slec);
        
        
    }else{
        
        $usuario->mostrar();
        
    }
        
 
        
    
?>