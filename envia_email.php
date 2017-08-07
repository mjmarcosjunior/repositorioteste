<?php
date_default_timezone_set('America/Sao_Paulo');
    //verifica se existe conexão com bd, caso não tenta criar uma nova
     
    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome        = ($_POST['nome']); 
    $email     = ($_POST['email']);  
    $telefone    = ($_POST['telefone']);  
    $emailsuporte = 'mjmarcosjunior@gmail.com';



     // Compo E-mail
  $arquivo = "

   <html>
    <div>O cliente ".$nome." fez contato pelo nosso site, confira se ele marcou um agendamento com a equipe de suporte, caso contrário, entre em contato pelo email do cliente: ".$email." ou pelo telefone: ".$telefone."</div>
    </html>
  ";
//enviar
  
  // emails para quem será enviado o formulário
  $destino = $emailsuporte;
  $assunto = "Novo cliente fez contato";

  // É necessário indicar que o formato do e-mail é html
  	$headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: Roi Hero <atendimento@roihero.com.br>\r\n";
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);

  $URL = "agradecemos";

   echo ("<script>location.href='$URL'</script>");


?>