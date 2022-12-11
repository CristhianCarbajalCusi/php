<?php
     
    class Conexion{
        /*  
        public $conn;
        function __construct(){
             
               
    
            if(!$conn){
                die("Conexion errorea : ".mysqli_connect_error());
            }
            echo "Conexion satisfactoria!.";
     
      
        }
        */
        function conectar(){
            $host = "localhost";
            $username = "root";
            $pass = "root";
            $database = "paggatosgraciosos";
            $conn = new mysqli($host, $username, $pass, $database);
            return $conn;
        }


    }
    


     

?>