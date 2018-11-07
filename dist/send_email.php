<?php
  date_default_timezone_set("America/Araguaina");
  function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
  }
  function validaEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
  }
  //Catch Form Name and to define the E-mail Title
  $formName = pegaValor('formName');
  switch ($formName) {
      case 'operadoras':
          $formTitle = ' de Parceiros - Operadoras';
          break;
      case 'medhospitais':
          $formTitle = ' de Parceiros - Médicos/Hospitais';
          break;
      case 'trabalhe':
          $formTitle = ' - Trabalhe Conosco';
          break;
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

  //define('KB', 1024);
  //define('MB', 1048576);
  //define('GB', 1073741824);
  //define('TB', 1099511627776);

  //UPOAD FILE
  $File_Name = '';
  if(isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"]== UPLOAD_ERR_OK){
    ############ Edit settings ##############
    $fsize = $_FILES["arquivo"]["size"];
    $Random_Number = rand(0, 9999999999); //Random number to be added to name 
    $UploadDirectory = 'uploads/'; //specify upload directory ends with / (slash)

    //check if this is an ajax request
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
        die();
    }
    
    //Is file size is less than allowed size.
    if ($_FILES["arquivo"]["size"] > 2097152) { //2097152
        die("Arquivo muito grande. O máximo é de 2MB.");
    }
    
    //allowed file type Server side check
    switch(strtolower($_FILES['arquivo']['type'])){
      //allowed file types
      //Compressed
      case 'application/x-zip-compressed':
      //PDF
      case 'application/pdf':
      //Word
      case 'application/msword':
      case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
        break;
      default:
        die('<p class="error">Tipo de arquivo não suportado!</p>'); //output error
    }
    
    $File_Name     = strtolower($_FILES['arquivo']['name']);
    $File_Ext      = substr($File_Name, strrpos($File_Name, '.')); //get file extention
    $Random_Number =  md5($Random_Number);
    $now = new DateTime();
    $dateSR = str_replace('-','_',$now->format('d-m-Y H:i:s'));
    $dateSR = str_replace(' ','_',$dateSR);
    $dateSR = str_replace(':','_',$dateSR);

    mkdir($UploadDirectory.$Random_Number);
    $NewFileName = $dateSR.$File_Ext; //new file name

    if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $UploadDirectory.$Random_Number.'/'.$NewFileName )){
      $fullPathName = 'http://'.$_SERVER['SERVER_NAME'].'/'.$UploadDirectory.$Random_Number.'/'.$NewFileName;
    }else{
      header("location:trabalhe.php?msg=errorUpload");
      die();
    }
  }else{
    header("location:trabalhe.php?msg=errorUpload");
    die();
  }

  //EMAIL HTML
  $mensagemConcatenada = '<div style="border:1px solid #EDEDED; padding:10px; line-height:25px; text-align:left; font-family: arial, tahoma, verdana, sans-serif; font-size:14px">'; 
  $mensagemConcatenada .= ' <img src="http://www.humanamagna.com.br/images/logoHMedio.png" alt=""><br/><br/>'; 
  $mensagemConcatenada .= ' <strong style="font-size:18px; color:#00a5b0">Formulário'.$formTitle.'</strong><br/>';
  if(!empty($nome)){
    $mensagemConcatenada .= ' <strong>Nome</strong>: '.$nome.'<br/>'; 
  }else{
    $mensagemConcatenada .= ' <strong>Nome</strong>: não definido<br/>';
    $nome = "Não definido";
  }
  if(!empty($cargo)){
    $msgComplement = ($formName=='trabalhe') ? ' Pretendido' : '';
    $mensagemConcatenada .= ' <strong>Cargo'.$msgComplement.'</strong>: '.$cargo.'<br/>';
  }
  if(!empty($empresa)){
    $mensagemConcatenada .= ' <strong>Empresa</strong>: '.$empresa.'<br/>';
  }
  if(!empty($email)){
    $mensagemConcatenada .= ' <strong>E-mail</strong>: '.$email.'<br/>';
  }
  if(!empty($telefone)){
    $mensagemConcatenada .= ' <strong>Telefone</strong>: '.$telefone.'<br/>';
  }
  if(!empty($celular)){
    $mensagemConcatenada .= ' <strong>Celular</strong>: '.$celular.'<br/>';
  }
  if(!empty($fullPathName)){
    $mensagemConcatenada .= ' <strong>Arquivo</strong>: <a href="'.$fullPathName.'">'.$fullPathName.'</a><br/>';
  }
  if(!empty($mensagem)){
    $msgComplement = ($formName=='trabalhe') ? 'Mensagem' : 'Interesse';
    $mensagemConcatenada .= ' <strong>'.$msgComplement.'</strong>: '.$mensagem.'<br/>';
  }
  if(!empty($contactby)){
    $mensagemConcatenada .= ' <strong>Gostaria de ser contatado por: </strong> '.$contactby.'<br/>';
  }
  $mensagemConcatenada .= '</div>'; 

  /*********************************** || ************************************/ 

  $emailComplement = ($formName=='trabalhe') ? 'Trabalhe Conosco' : 'Parceiros';
  $assunto  = 'Humana Magna - '.$emailComplement;


  require_once('PHPMailer-master/PHPMailerAutoload.php');
      
  $mail = new PHPMailer();
  $mail->IsSMTP();
  
  //Authentication
  $mail->Host  = 'smtp.humanamagna.com.br';
  $mail->SMTPAuth  = true;
  $mail->Charset   = 'UTF-8';
  $mail->Port  = '587';
  $mail->Username  = 'tecnologia@humanamagna.com.br';
  $mail->Password  = 'tirhm!@#';
  
  //Define o remetente
  $mail->SetFrom('no-reply@humanamagna.com.br', 'Humana Magna - '.$emailComplement); //No-Reply
  $mail->AddReplyTo(utf8_decode($email), utf8_decode($nome)); //Seu e-mail
  $mail->Subject  = utf8_decode($assunto);
  
  //Define os destinatário(s)
  $mail->AddAddress('rafaelkellows86@gmail.com', 'Rafael Gmail');
  //Campos abaixo são opcionais 
  //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= // Copias
  //$mail->AddBCC('ana.ferreira@humanamagna.com.br', 'Ana Ferreira');
  $mail->AddBCC('liv@humanamagna.com.br', 'Liv Soban');
  $mail->AddBCC('trabalheconosco@humanamagna.com.br', 'Adriana Calefi');
  $mail->AddBCC('adriana.calefi@humanamagna.com.br', 'Adriana Calefi');
  //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo

  //
  $mail->IsHTML(true);
  $mail->Body  = utf8_decode($mensagemConcatenada);
  /*echo $mail->Send();
  if (!$mail->send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
     echo "Message sent!";
  }
  return;
  */
  if(!$mail->Send()){
    if($formName=='trabalhe'){
      //echo 'Erro ao enviar Email:' . $mail->ErrorInfo;
      header("location:trabalhe.php?msg=errorSend");
    }else{
      header("location:parceiros.php?msg=errorSend&fid=".$formName);
    }
  }else{
    if($formName=='trabalhe'){
      header("location:trabalhe.php?msg=ok");
    }else{
      header("location:parceiros.php?msg=ok&fid=".$formName);
    }
  }?>