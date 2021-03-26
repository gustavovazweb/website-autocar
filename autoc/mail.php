<?php
// RECEBENDO DADOS - POST
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$hour = $_POST['hour'];
$date = $_POST['date'];

$headers = "Content-Type: text/plain;charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// DADOS DO FORM
$body = "Formulário da página de contato\r\n";
$body .= "Nome: " . $name . "\r\n";
$body .= "Email: " . $email . "\r\n";
$body .= "phone: " . $phone . "\r\n";
$body .= "hour: " . $hour . "\r\n";
$body .= "date: " . $date . "\r\n";

// DESTINO DA MENSAGEM
$email_to = 'contato@autocar.com.br';

// ENVIANDO
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $body, $headers);

if ($status):
  // SUCCESS
  header('location:index.php?status=success');
else:
  // ERROR
  header('location:index.php?status=error');
endif;
?>
