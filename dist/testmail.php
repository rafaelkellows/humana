<? php
 
ini_set ('display_errors', 1);
 
error_reporting (E_ALL);
 
$From = "testing @ yourdomain";
 
$To = "recipientemailaddress";
 
$Subject = "Verificando o correio do PHP";
 
$Message = "O correio do PHP funciona bem";
 
$Headers = "De:". $De;
 
Mail ($to, $subject, $message, $headers);
 
echo "A mensagem de e-mail foi enviada.";
 
?>