<?php

/* Inclui a classe do phpmailer */				
require("Classes/mail/PHPMailerAutoload.php");

/* Cria uma Instância da classe */
$mail = new PHPMailer();

/* #########################
 * # CONFIGURA��ES BÁSICAS # 
 * #########################
 */

/*$assunto = 'Oie! Bom dia! Teste :) !';
$mensagem = 'A MENSAGEM DO <b><i>EMAIL</i></b>. PODE SER <b>HTML :)</b>.';
$remetente = 'giselly.reboucas09@gmail.com';
$nomeRemetente = 'Giselly Rebou�as';
$sua_senha = 'G1s3lly@';*/
 
$remetente = 'avaweb@iteva.org.br';
$nomeRemetente = 'AVAWEB';
$senha = 'Iteva100';
/* Servidor */
$host = 'smtp.office365.com';

/* Configura os destinatários (pra quem vai o email) */
$mail->AddAddress(utf8_decode($destinatario), utf8_decode($nomeDestinatario));

 
/* ###########################
 * # CONFIGURA��ES AVAN�ADAS # 
 * ###########################
 */
				
/* Define que é uma conex�o SMTP */
$mail->IsSMTP();
/* Define o endereço do servidor de envio */
$mail->Host = $host;
/* Utilizar autenticação SMTP */ 
$mail->SMTPAuth = true;
/* Protocolo da conexão */
$mail->SMTPSecure = "tls";
/* Porta da conexão */
$mail->Port = "587";
/* Email ou usu�rio para autenticação */
$mail->Username = $remetente;
/* Senha do usu�rio */
$mail->Password = $senha;
 
/* Configura os dados do remetente do email */
$mail->From = $remetente; // Seu e-mail
$mail->FromName = $nomeRemetente; // Seu nome
 
/* Configura a mensagem */
$mail->IsHTML(true); // Configura um e-mail em HTML
 
/*   
 * Se tiver problemas com acentos, modifique o charset
 * para ISO-8859-1  
 */
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
 
/* Configura o texto e assunto */
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $mensagem; // A mensagem em HTML
$mail->AltBody = trim(strip_tags($mensagem)); // A mesma mensagem em texto puro
 
/* Configura o anexo a ser enviado (se tiver um) */
//$mail->AddAttachment("foto.jpg", "foto.jpg");  // Insere um anexo
 
/* Envia o email */

    $email_enviado = $mail->Send();

/* Limpa tudo */
//$mail->ClearAllRecipients();
//$mail->ClearAttachments();
 
/* Mostra se o email foi enviado ou n�o */
if ($email_enviado) {
	echo "Email enviado!";
} else {
	echo "Não foi possível enviar o e-mail.<br /><br />";
	echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
}
?>