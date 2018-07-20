<?php 
	$errors = '';
	$myemail = 'brunotourinho19@hotmail.com';//<-----Put Your email address here.
	if(empty($_POST['name'])  ||
	   empty($_POST['email']) ||
	   empty($_POST['message']))
	{
	    $errors .= "\n Erro: Todos os campos são requeridos";
	}
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$message = $_POST['message'];
	if (!preg_match(
	"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
	$email_address))
	{
	    $errors .= "\n Erro: Email Inválido";
	}

	if( empty($errors))
	{
	$to = $myemail;
	$email_subject = "Formulário de Contato: $name";
	$email_body = "Você recebeu uma nova mensagem. ".
	"Aqui estão os detalhes:\n Nome: $name \n ".
	"Email: $email_address\n Menssagem: \n $message";
	$headers = "Para: $myemail\n";
	$headers .= "De: $email_address";
	$send_mail = mail($to,$email_subject,$email_body,$headers);
	if($send_mail){
	    //alert enviado!
	    echo "<script>alert('E-mail enviado com sucesso!');</script>";
	    //redireciona para onde quiser, neste caso, para index.html
	    header('Location: index.html');//redireciona para onde quiser, neste caso, para index.html
	} else {
	    //alert não enviado!
	    echo "<script>alert('Falha ao enviar e-mail.');</script>";
	    //redireciona para onde quiser, neste caso, para index.html
	    header('Location: index.html');
	}
	}
?>


