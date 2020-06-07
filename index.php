<?php

use Mailing\SendMail;
use Mailing\Mailers\SwiftMailer;
use Mailing\Mailers\PHPMailer;

require_once 'Mailing/Contracts/Mailers/MailerInterface.php';
require_once 'Mailing/Mailers/SwiftMailer.php';
require_once 'Mailing/Mailers/PHPMailer.php';
require_once 'Mailing/SendMail.php';

$swiftMailer = new SwiftMailer();

$sendMail = new SendMail($swiftMailer);

var_dump($sendMail->sendMessage());

$phpMailer = new PHPMailer();

$sendMail = new SendMail($phpMailer);

var_dump($sendMail->sendMessage());

