<?php
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD']!=='POST'){http_response_code(405);exit;}
$name=trim($_POST['name']??'');$email=filter_var($_POST['email']??'',FILTER_VALIDATE_EMAIL);$phone=trim($_POST['phone']??'');$message=trim($_POST['message']??'');
if(!$name||!$email||!$message||strlen($message)>3000){http_response_code(422);echo json_encode(['success'=>false,'message'=>'Please check the form and try again.']);exit;}
$configFile=dirname(__DIR__).'/config.php';$to='adonaipch@gmail.com';if(file_exists($configFile)){$c=require $configFile;$to=$c['contact_email']??$to;}
$subject='Website enquiry from '.$name;$body="Name: $name\nEmail: $email\nPhone: $phone\n\n$message";$headers="From: website@".($_SERVER['SERVER_NAME']??'localhost')."\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
$ok=@mail($to,$subject,$body,$headers);echo json_encode(['success'=>$ok,'message'=>$ok?'Thank you. Your message has been sent.':'We could not send your message. Please email us directly.']);