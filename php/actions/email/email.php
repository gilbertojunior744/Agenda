<?php
    
    require_once("../../class/Contato.php");
    require_once("../../class/Eventos.php");
    
    $contatoId = $_GET['contact'];
    $eventoId = $_GET['event'];

    

    $evento = new Eventos();
    $evento->getNomeEvento($eventoId);
    $evento->getDataEvento($eventoId);
    $evento->getHorarioEvento($eventoId);
    

    $contato = new Contato();
    



    // Compo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
  <tr>
                 <td width='500'>Nome:".$contato->getNome($contatoId)."</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>".$contato->getEmail($contatoId)."</b></td>
     </tr>
      <tr>
                  <td width='320'>Telefone:<b>".$contato->getCelular($contatoId)."</b></td>
                </tr>
     <tr>
                  
                </tr>
                <tr>
                  <td width='320'>Mensagem:".$evento->getNomeEvento($eventoId)."</td>
                </tr>
            </td>
          </tr>
          <tr>
            <td>Descrição Evento". $evento->getDescricaoEvento($eventoId)."</td>
          </tr>
          <tr>
            <td>Descrição Evento <b>".$evento->getDataEvento($eventoId)." ás". $evento->getHorarioEvento($eventoId)."</td >
          </tr>
        </table>
    </html>
  ";

  //enviar

  // emails para quem será enviado o formulário
  $emailenviar =  $contato->getEmail($contatoId) ;
  $destino = $emailenviar;
  $assunto = $evento->getNomeEvento($eventoId);

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=email.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
  
  header("Location:../../../email.php?event=$eventoId");

?>