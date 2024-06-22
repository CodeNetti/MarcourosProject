<?php
  //Variáveis
  $nome = $_POST['Nome'];
  $email = $_POST['Email'];
  $tel = $_POST['Telefone'];
  $msg = $_POST['Mensagem'];
  $From = $email;
 

  //Compo E-mail
  $arquivo = "
    
      De: $email
      Nome: $nome
      Conato: $tel      
      Mensagem: $msg
     
    
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "raphasimonettti@gmail.com";
  $assunto = "Contato Formulario";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: Meu site <$From>";
  $headers .= "Return-Path: <$From>";
  $headers .= "Reply-to: <$email>";
  

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  
  header("Location: Pages/thanks.html");
?>