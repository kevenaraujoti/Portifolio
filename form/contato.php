<?php
  //Variáveis
  $nome = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $mensagem = $_POST['message'];
  $data_envio = date('d/m/Y');
 

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Assunto: </b>$subject</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "kevenaraujoo@hotmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='1;URL=index.html'>";
?>
