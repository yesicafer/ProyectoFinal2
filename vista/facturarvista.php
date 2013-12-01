<?php

    class FacturarVista{
        
        public function __construct() {
            ;
        }
   
        public function mostrarFactura(){
            
            $base = file_get_contents("../plantillas/base1.html");
            $entrar = file_get_contents("../plantillas/facturar.html");
            $base = str_ireplace('{contenido}', $entrar, $base);
            echo $base;  
        }
        
        public function mostrarProduct()
        {
            if ($fila = @mysql_fetch_object($query))
{
	
echo"<tr>";
echo " <td> $fila[id_producto] </td> <td> $fila[nombre_producto] </td> <td> $fila[precio_producto]  </td> <br>";
   echo "</tr>";

}
        }
    }
    
?>
