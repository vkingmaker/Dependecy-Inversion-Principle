<?php

use Mailing\SendMail;
use Mailing\Mailers\SwiftMailer;
use Mailing\Mailers\PHPMailer;
use Mailing\Mailers\Mailer;

require_once 'Mailing/Contracts/Mailers/MailerInterface.php';
require_once 'Mailing/Mailers/SwiftMailer.php';
require_once 'Mailing/Mailers/PHPMailer.php';
require_once 'Mailing/Mailers/Mailer.php';
require_once 'Mailing/SendMail.php';

// GOOD

// $swiftMailer = new SwiftMailer();

// $sendMail = new SendMail($swiftMailer);

// var_dump($sendMail->sendMessage());

// $phpMailer = new PHPMailer();

// $sendMail = new SendMail($phpMailer);

// var_dump($sendMail->sendMessage());



// BAD

$mailer = new Mailer();

$sendMail = new SendMail($mailer);

var_dump($sendMail->sendMessage());

