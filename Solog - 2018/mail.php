<?php

	if(isset( $_POST['name']))
	  $name = $_POST['name'];
	if(isset( $_POST['email']))
	  $email = $_POST['email'];
	if(isset( $_POST['message']))
	  $message = $_POST['message'];
	if ($name == ''){
	  echo "Nome não pode estar vazio.";
	  die();
	}
	if ($email == ''){
	  echo "E-mail não pode estar vazio.";
	  die();
	} else {
	  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	    echo "Email com formato inválido.";
	    die();
	  }
	}
	if ($message == ''){
	  echo "A mensagem não pode estar vazia.";
	  die();
	}


	$content = "From: $name \n Email: $email \n Message: $message";
	$recipient = "youremail@here.com";
	$mailheader = "From: $email \r\n";
	mail($recipient, $content, $mailheader) or die("Error!");
	echo "Email enviado!";
?>