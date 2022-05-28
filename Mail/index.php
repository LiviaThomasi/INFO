<?php 

$nome=$_POST['nome'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];

require_once('src/PHPMailer.php'); 
require_once('src/SMTP.php'); 
require_once('src/Exception.php'); 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 
$mail = new PHPMailer(true); 
try{ 
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	 $mail->isSMTP(); 
	 $mail->Host = 'smtp.gmail.com';
	 $mail->SMTPAuth = true;
	 $mail->Username = 'liviathomasipinto@gmail.com';
	 $mail->Password = 'Va1215203071'; 
	 $mail->Port = 587;
	 $mail->setFrom('liviathomasipinto@gmail.com'); 
	 $mail->addAddress('liviathomasipinto@gmail.com'); 
	 $mail->addAddress('liviathomasipinto@gmail.com'); 
$mail->isHTML(true); 
$mail->Subject = 'Trabalho envio de emails'; 
$mail->Body = 'TESTE';
$mail->AltBody = 'Deu certo';
if($mail->send()) { echo 'Email enviado com sucesso'; 
}else{ echo 'Email não enviado'; } }
 catch (Exception $e)
{ echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";}