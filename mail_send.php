<?php

	function pegaValor($valor) {
	    return isset($_POST[$valor]) ? $_POST[$valor] : '';
	}

	function validaEmail($email) {
	    return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) {
	    $headers = "From: $email_servidor\r\n" .
	               "Reply-To: $de\r\n" .
	               "X-Mailer: PHP/" . phpversion() . "\r\n";
	    $headers .= "MIME-Version: 1.0\r\n";
	    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	  
	  mail($para, $assunto, nl2br($mensagem), $headers);
	}

	$email_servidor = "no-replay@humanamagna.com.br";
	$para = "rafaelkellows@hotmail.com";
	$de = pegaValor('email');

	$nome = pegaValor('nome');
	$cargo = pegaValor('cargo');
	$empresa = pegaValor('empresa');
	$email = pegaValor('email');
	$telefone = pegaValor('telefone');
	$celular = pegaValor('celular');
	$mensagem = pegaValor('interesse');
	$assunto = "Humana Magna - Parceiros";

	if ($nome && validaEmail($de) && $mensagem) {
	    enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);
	    header("location:./?msg=ok");
	} else {
	    header("location:./?msg=nok");
	}

	//header("location:./");

?>