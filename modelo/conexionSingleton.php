<?php

    class conexionSQLI
    {
        private static  $instancia = null;
        private $con;
        
        private function __construct()
        {
            $this->con = mysqli_connect('localhost','root','321','bdparcial_g1');  
            if($con->connect_errno){
                die("Conexion fallida" . $conexion->connect_errno);
            }else{
                echo "conectado a db ";
            }          
        }

        public static function getInstancia()
        {
            if(self::$instancia==null)
                self::$instancia = new self();
            return(self::$instancia);
            
        }
        
        public function getConnection()
        {
            return $this->con;
        }
    }

?>