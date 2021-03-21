<?php
    

    class Eventos{

        private $conn;
        public function __construct(){
       
            $this->conn = new PDO("mysql:dbname=gilbertojunior744;host=localhost","root","");
       }

        function countEventos(){
            $stmt = $this->conn->prepare("SELECT * FROM eventos");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo count($result);
        } 

        

        function getEventos(){
            $stmt = $this->conn->prepare("SELECT * FROM eventos");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($result as $row) {
               echo 
               "<div class='card shadow mx-3' style='width: 18rem;'>
               <img src='img/events/confraternizacao.jpg' class='card-img-top' alt='...''>
               <div class='card-body'>
                   <h4 class='card-title text-center'>$row[nome]</h4>
                   <div class='row mx-0 text-center'>
                       <h5 class='col-7 text-danger'>".date('d-m-Y',strtotime(str_replace('-','/',$row['data_evento'])))."</h5>
                       <h5 class='col-5'>".$row['horario']."</h5>
                   </div>
                   <p class='card-text'>$row[descricao]</p>
                   <div class='text-center'>
                       <a href='email.php?event=$row[id_evento]' class='btn btn-primary mx-auto mb-2'>Convidar Contatos</a>
                       <a href='#' class='btn btn-outline-primary mx-auto mb-2 mx-auto'>Ver Participantes</a>
                   </div>
               </div>
           </div>";

            }
        }

        function getEvento($id){
            $stmt = $this->conn->prepare("SELECT * FROM eventos WHERE id_evento = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($result as $row) {
               echo 
               "<div class='card text-center shadow mx-auto my-3' style='width: 18rem;'>
               <img src='img/events/confraternizacao.jpg' class='card-img-top' alt='...''>
               <div class='card-body'>
                   <h4 class='card-title text-center'>$row[nome]</h4>
                   <div class='row mx-0 text-center'>
                       <h5 class='col-6 text-danger'>".date('d-m-Y',strtotime(str_replace('-','/',$row['data_evento'])))."</h5>
                       <h5 class='col-6'>".$row['horario']."</h5>
                   </div>
                   <p class='card-text'>$row[descricao]</p>
               </div>
           </div>";

            }
        }


        function getNomeEvento($id){
            $stmt = $this->conn->prepare("SELECT * FROM eventos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['nome'];
                
            }
        }

        function getDescricaoEvento($id){
            $stmt = $this->conn->prepare("SELECT * FROM eventos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['descricao'];
                
            }
        }

        function getDataEvento($id){
            $stmt = $this->conn->prepare("SELECT * FROM eventos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['data_evento'];
                
            }
        }

        function getHorarioEvento($id){
            $stmt = $this->conn->prepare("SELECT * FROM eventos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['horario'];
                
            }
        }

        function cadastroEvento($id){
            $stmt = $this->conn->prepare("SELECT * FROM eventos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['data_cadastro'];
                
            }
        }

        function atualizacaoEvento($id){
            $stmt = $this->conn->prepare("SELECT * FROM eventos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['atualizacao_cadastro'];
                
            }
        }

        
    }


?>