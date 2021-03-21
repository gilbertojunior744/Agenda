<?php
    
    class Conexao {

       public function __construct(){
       
            $conn = new PDO("mysql:dbname=gilbertojunior744;host=localhost","root","");
       }
        
    }


?>