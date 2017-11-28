<?php

  function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
  }
  function validaEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  $formName = pegaValor('formName');

  if($formName=='operadoras'){
    $formTitle = ' - Operadoras';
  }else{
    $formTitle = ' - Médicos/Hospitais';
  }
  $nome = pegaValor('nome');
  $cargo = pegaValor('cargo');
  $empresa = pegaValor('empresa');
  $email = pegaValor('email');
  $telefone = pegaValor('telefone');
  $celular = pegaValor('celular');
  $mensagem = pegaValor('interesse');
  $contactby = pegaValor('contactby');

  $name = 'Rafael S. K.';
  //$email = 'rafaelkellows86@gmail.com';

  $mensagemConcatenada = '<div style="border:1px solid #EDEDED; padding:10px; line-height:25px; text-align:left; font-family: arial, tahoma, verdana, sans-serif; font-size:14px">'; 
  $mensagemConcatenada .= ' <img src="http://www.humanamagna.com.br/beta/images/logoHMedio.png" alt=""><br/><br/>'; 
  $mensagemConcatenada .= ' <strong style="font-size:18px; color:#00a5b0">Formulário de Parceiros'.$formTitle.'</strong><br/>'; 
  $mensagemConcatenada .= ' <strong>Nome</strong>: '.$nome.'<br/>'; 
  $mensagemConcatenada .= ' <strong>Cargo</strong>: '.$cargo.'<br/>'; 
  $mensagemConcatenada .= ' <strong>Empresa</strong>: '.$empresa.'<br/>'; 
  $mensagemConcatenada .= ' <strong>E-mail</strong>: '.$email.'<br/>'; 
  $mensagemConcatenada .= ' <strong>Telefone</strong>: '.$telefone.'<br/>'; 
  $mensagemConcatenada .= ' <strong>Celular</strong>: '.$celular.'<br/>'; 
  $mensagemConcatenada .= ' <strong>Interesse</strong>: '.$mensagem.'<br/>';
  $mensagemConcatenada .= ' <strong>Gostaria de ser contatado por: </strong> '.$contactby.'<br/>';
  $mensagemConcatenada .= '</div>'; 
  /*********************************** || ************************************/ 

  $assunto  = 'Humana Magna - Parceiros';

  require_once('PHPMailer-master/PHPMailerAutoload.php');
      
  $mail = new PHPMailer();
  $mail->IsSMTP();
  
  //Authentication
  $mail->Host  = 'smtp.humanamagna.com.br';
  $mail->SMTPAuth  = true;
  $mail->Charset   = 'utf8_decode()';
  $mail->Port  = '587';
  $mail->Username  = 'tecnologia@humanamagna.com.br';
  $mail->Password  = 'Humana@321';
  
  //Define o remetente
  $mail->SetFrom('no-reply@humanamagna.com.br', 'Humana Magna - Parceiros'); //No-Reply
  $mail->AddReplyTo(utf8_decode($email), utf8_decode($nome)); //Seu e-mail
  $mail->Subject  = utf8_decode($assunto);
  
  //Define os destinatário(s)
  //$mail->AddAddress('desenvolvimento@spatula.com.br','Spatula');
  //Campos abaixo são opcionais 
  //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->AddBCC('rafaelkellows86@gmail.com', 'Rafael Gmail'); // Copia
  $mail->AddBCC('liv@humanamagna.com.br', 'Liv Soban');
  //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo

  //
  $mail->IsHTML(true);
  $mail->Body  = utf8_decode($mensagemConcatenada);
   
  if(!$mail->Send()){
    header("location:parceiros.php?msg=err&fid=".$formName);
  }else{
    header("location:parceiros.php?msg=ok&fid=".$formName);
  }
  //echo $mensagemRetorno;
?>