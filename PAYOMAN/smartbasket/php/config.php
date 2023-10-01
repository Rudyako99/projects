<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		 require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'smtp.gmail.com';
		  const LOGIN = 'sanchosr99@gmail.com';
		  const PASS = '9cb32192642466';
		  const PORT = '2525';

		// *** /SMTP *** //
   
    const SENDER = 'sanchosr99@gmail.com';
    const CATCHER = 'sanchosr99@gmail.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    
	$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 465;
$phpmailer->Username = 'sanchosr99@gmail.com';
$phpmailer->Password = '9cb32192642466';