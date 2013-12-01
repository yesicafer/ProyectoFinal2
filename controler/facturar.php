<?php
    require_once '../modelo/conexion.php';
    require_once '../vista/facturarvista.php';
    require_once '../vista/loginvista.php';
      require_once '../modelo/facturamodel.php';
 
   
    class Facturar{
        public $modelo;
        public $vista;
        
        public function __construct() {
            $this->modelo = new Conexion();
            $this->vista = new FacturarVista(); 
            $this->regreso = new LoginVista();   
        }
        
        public function mostrarVistaFacturar(){
            $this->vista->mostrarFactura();      
        }
            
         public function mostrarLogin(){
            $this->regreso->mostrarLogin();      
         }    
    }
    
        $usuario = $_POST["usuario"];   
        $password = $_POST["password"];
                   
 $buscar= $_POST['buscar'];
         
         $db_host = 'localhost';
         $db_user = 'root';
         $db_pass = 'yesica';
         $db_name = "facturacion";
         
         $init= mysqli_connect($db_host, $db_user, $db_pass, $db_name);
          
        $result=mysqli_query($init,"SELECT * FROM usuario WHERE id_usuario = '$usuario' AND contrasena_usuario='$password'")or die(mysql_error());
        if($row= mysqli_fetch_array($result)){
            $login = new Facturar();    
            $login->mostrarVistaFacturar();
            
            

$query= @mysql_query('SELECT * FROM productos WHERE id_producto="'.mysql_real_escape_string($buscar).'"');
    $fila = @mysql_fetch_object($query);        
echo"<tr>";
echo " <td> $fila[nombre_producto] </td> <td> $fila[precio_producto] </td> <td> $fila[cantidad_producto]  </td> <br>";
   echo "</tr>";
        }


        
        
        
        else{
           echo '<script type="text/javascript">
                     alert("Usuario incorrecto");
                     location.href = "login.php";
                   </script>';  
           }
        ?>