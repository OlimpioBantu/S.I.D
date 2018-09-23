<?php

function pegaValor($valor) 
{
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function validaEmail($email) 
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) 
{
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, nl2br($mensagem), $headers);
}

$de = pegaValor("email");//a mesma conta de mai onde esta hospedado
$assunto = "Assunto da mensagem";
$mensagem = pegaValor("mensagem");
$para = $_POST["email"];
$email_servidor = "SID@gmail.com";//conta de mail onde esta hospedado o sistema

if (validaEmail($de) && $mensagem) 
{
	enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);
	$pagina = "sid_email_ok.php";
} else 
{
	$pagina = "sid_email_erro.php";
}

header("location:$pagina");

?>