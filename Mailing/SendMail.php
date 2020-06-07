<?php

namespace Mailing;

use Mailing\Contracts\Mailers\MailerInterface;

use Mailing\Mailers\Mailer;

class SendMail
{
    /**
     * @var MailerInterface
     */
    private $mailer;


    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    //  /**
    //  *  @param MailerInterface $mailer
    //  */
    // public function __construct(MailerInterface $mailer)
    // {
    //     $this->mailer = $mailer;
    // }

    /**
     * @return string
     */
    public function sendMessage(): string
    {
        if ($this->mailer->send()) {
            return $this->mailer->confirmmationMessage();
        }

        return $this->mailer->errorMessage();
    }
}
