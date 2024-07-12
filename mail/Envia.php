<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php'; // Atualize o caminho se necessário
require 'src/PHPMailer.php'; // Atualize o caminho se necessário
require 'src/SMTP.php'; // Atualize o caminho se necessário

// Variáveis
$nome = $_POST['Nome'];
$email = $_POST['Email'];
$tel = $_POST['Telefone'];
$msg = $_POST['Mensagem'];
$From = $email;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Substitua pelo seu servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'contatomarcouros@gmail.com'; // Seu usuário SMTP
        $mail->Password = 't j w e z lu r q u k r e s i p'; // Sua senha SMTP
        $mail->SMTPSecure = 'tls'; // Use 'ssl' se a porta for 465
        $mail->Port = 587; // Use 465 para 'ssl'
        // Remetente e destinatário
        $mail->setFrom($email, 'Contato Forms Site');
        $mail->addAddress('marcouros123@gmail.com'); // Endereço do destinatário

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Contato Formulario';
        $mail->Body    = "
            <html>
            <head>
                <title>Contato Formulário</title>
            </head>
            <body>
                <p>De: {$email}</p>
                <p>Nome: {$nome}</p>
                <p>Contato: {$tel}</p>
                <p>Mensagem: {$msg}</p>
            </body>
            </html>
        ";

        $mail->send();
        header("Location: ../Pages/thanks.html");
        exit();
    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
} else {
    echo "Método de requisição inválido.";
    $mail->SMTPDebug = 2; // Habilita a depuração SMTP (1 = erros e mensagens, 2 = mensagens detalhadas)

}
?>
