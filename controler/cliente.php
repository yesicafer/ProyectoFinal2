<?php
    require_once '../modelo/conexion.php';
    require_once '../vista/clientevista.php';
    
    class Cliente{
        
        public $modelo;
        public $vista;
        
        public function __construct() {
            $this->vista = new ClienteVista();  
        }
        
        public function mostrar(){ 
            $this->vista->mostrarcliente();
        } 
    }
    
        $cliente = new Cliente();    
        $cliente->mostrar();
        
        $nombre=$_POST["nombres"];
        $apellido=$_POST["apellidos"];
        $ide=$_POST["identificacion"];
        $telefono=$_POST["telefono"];
        $localidad=$_POST["localidad"];
        
        
         $db_host = 'localhost';
         $db_user = 'root';
         $db_pass = 'oscar';
         $db_name = "facturacion";
         
         $init= mysqli_connect($db_host, $db_user, $db_pass, $db_name);
         $result=mysqli_query($init,"INSERT INTO cliente(nombre_cliente,apellido_cliente,identificacion_cliente,telefono_cliente,clientecol) VALUES ('$nombre','$apellido','$ide','$telefono','$localidad')")or die(mysql_error());
               echo '<script type="text/javascript">
                     alert("Usuario ingresado correctamente");
                   </script>';  
   
      
   ?>
    
   