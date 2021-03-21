<?php
    
    class Contato{
        
        private $conn;
        public function __construct(){
       
            $this->conn = new PDO("mysql:dbname=gilbertojunior744;host=localhost","root","");
       }

        function getContatos(){
            
            $stmt = $this->conn->prepare("SELECT * FROM contatos");
            $stmt->execute();

            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
               
                echo 
                "<tr>
                    <td><img height='50' width='50' style='border-radius:50%;' src='img/padrao.jpg'</td>
                    <td class='py-3'>$row[nome]</td>
                    <td class='py-3'>$row[sobrenome]</td>
                    <td class='py-3'>$row[celular]</td>
                    <td class='py-3'>$row[email]</td>
                    <td>
                        <a href='php/actions/contato/deletar.php?id=$row[id_contato]' class='btn btn-danger mx-2 my-2'>Excluir</a>
                    </td>
                </tr>";
            }
        }

        function getContato(){
            
            $stmt = $this->conn->prepare("SELECT * FROM contatos");
            $stmt->execute();

            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
               
                echo 
                "<tr>
                    <td><img height='50' width='50' style='border-radius:50%;' src='img/padrao.jpg'</td>
                    <td class='py-3'>$row[nome]</td>
                    <td class='py-3'>$row[celular]</td>
                    <td>
                        <a href='../actions/grupo/participante.php?partipante=$row[nome]' class='btn btn-primary mx-2 my-2' data-bs-toggle='modal' data-bs-target='#editarContato'>Adicionar</a>
                    </td>
                </tr>";
            }
        }

        function envioEmail($eventId){
            $stmt = $this->conn->prepare("SELECT * FROM contatos");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo 
                "<tr>
                    <td>$row[nome]</td>
                    <td> $row[email]</td>
                    <td>
                            <a href='php/actions/email/email.php?contact=$row[id_contato]&event=$eventId' class='btn btn-outline-primary'>Enviar</a>
                        </td>
                        
                </tr>";
                
            }
        }

        function getNome($id){
            $stmt = $this->conn->prepare("SELECT * FROM contatos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['nome'];
                
            }

        }

        function getSobrenome($id){
            $stmt = $this->conn->prepare("SELECT * FROM contatos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['sobrenome'];
                
            }
        }

        function getCelular($id){
            $stmt = $this->conn->prepare("SELECT * FROM contatos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['celular'];
                
            }
        }

        function getEmail($id){
            $stmt = $this->conn->prepare("SELECT * FROM contatos WHERE id_contato = '$id'");
            $stmt->execute();
            $result =$stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                echo $row['email'];
                
            }
        }

        
            
        
    }

?>