<?php
 
/* apenas dispara o envio do formulário caso exista $_POST['enviarFormulario']*/
 
if (isset($_POST['enviarFormulario'])){

  /*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
  $enviaFormularioParaNome = 'Rafael Kellows';
  $enviaFormularioParaEmail = 'rafaelkellows86@gmail.com';
   
  $caixaPostalServidorNome = 'Developer E-mail Account';
  $caixaPostalServidorEmail = 'rafaelkellows86@gmail.com';
  $caixaPostalServidorSenha = 'NewManNewLife2016';
  /*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
   
  /* abaixo as veriaveis principais, que devem conter em seu formulario*/
  $remetenteNome  = $_POST['remetenteNome'];
  $remetenteEmail = $_POST['remetenteEmail'];
  $assunto  = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];
   
  $mensagemConcatenada = 'Formulário gerado via website'.'<br/>'; 
  $mensagemConcatenada .= '-------------------------------<br/><br/>'; 
  $mensagemConcatenada .= 'Nome: '.$remetenteNome.'<br/>'; 
  $mensagemConcatenada .= 'E-mail: '.$remetenteEmail.'<br/>'; 
  $mensagemConcatenada .= 'Assunto: '.$assunto.'<br/>';
  $mensagemConcatenada .= '-------------------------------<br/><br/>'; 
  $mensagemConcatenada .= 'Mensagem: "'.$mensagem.'"<br/>';

  /*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/ 
   
  require_once('PHPMailer-master/PHPMailerAutoload.php');
   
  $mail = new PHPMailer();
   
  $mail->IsSMTP();
  $mail->SMTPDebug  = false;
  $mail->SMTPAuth   = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Charset   = 'utf8_decode()';
  $mail->Host = "smtp.gmail.com";
  $mail->Port  = '465';
  $mail->Username  = $caixaPostalServidorEmail;
  $mail->Password  = $caixaPostalServidorSenha;
  $mail->SetFrom($remetenteEmail, utf8_decode($remetenteNome));
  //$mail->From  = $remetenteEmail;
  //$mail->FromName  = utf8_decode($remetenteNome);
  $mail->IsHTML(true);
  $mail->WordWrap = 50;
  $mail->Subject  = utf8_decode($assunto);
  $mail->Body  = utf8_decode($mensagemConcatenada);
  //$mail->AddReplyTo($enviaFormularioParaEmail , $enviaFormularioParaNome);
  $mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
   
  if(!$mail->Send()){
    $mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
  }else{
    $mensagemRetorno = 'Formulário enviado com sucesso!';
  }
 
}
?>
 
 
 
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Formulário Exemplo Autenticado</title>
  </head>
  <body>   
    <?php
    if(isset($mensagemRetorno)){
      echo $mensagemRetorno;
    }
    ?>
    <form method="POST" action="" style="width:300px;">
      <input type="text" name="remetenteNome" placeholder="Nome completo" style="float:left;margin:10px;">
      <input type="text" name="remetenteEmail" placeholder="Email" style="float:left;margin:10px;">
      <input type="text" name="assunto" placeholder="Assunto" style="float:left;margin:10px;">
      <textarea name="mensagem" placeholder="Mensagem" style="float:left;margin:10px;height:100px;width:200px;"></textarea>
      <input type="submit" value="enviar" name="enviarFormulario" style="float:left;margin:10px;">
    </form>
  </body>
</html>