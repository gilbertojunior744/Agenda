<?php
    

    class Grupo{

        private $conn;
        public function __construct(){
       
            $this->conn = new PDO("mysql:dbname=gilbertojunior744;host=localhost","root","");
       }
        
        function getGrupos(){
            $stmt = $this->conn->prepare("SELECT * FROM grupos");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($result as $row) {
               echo 
               "<tr>
                    <td><img height='50px' width='50px' style='border-radius:50%' src='img/padrao.jpg'></td>
                    <td class='py-3'>$row[nome_grupo]</td>
                    <td></td>
                    <td>
                        <a href='participante.php?id=$row[id_grupo]' class='btn btn-primary mx-2 my-2'>Adicionar Participante</a>
                        <a href='php/actions/grupo/deletar.php?id=$row[id_grupo]' class='btn btn-danger mx-2 my-2'>Excluir</a>
                    </td>
                    </tr>";

            }
        }

        function getGrupo($id){
            $stmt = $this->conn->prepare("SELECT * FROM grupos WHERE id_grupo='$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($result as $row) {
               echo 
               "<tr>
                    <td><img height='50px' width='50px' style='border-radius:50%' src='img/padrao.jpg'></td>
                    <td class='py-3'>$row[nome_grupo]</td>
                    
                    
                </tr>";

            }
        }

        function countGrupos(){
            $stmt = $this->conn->prepare("SELECT * FROM grupos");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo count($result);
        }

        function getNomeGrupo($id){
            $stmt = $this->conn->prepare("SELECT * FROM grupos WHERE id_grupo = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['nome_grupo'];
                
            }
        }

        
    }


?>