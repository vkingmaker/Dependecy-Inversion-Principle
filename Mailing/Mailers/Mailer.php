<?php

namespace Mailing\Mailers;

class Mailer
{
    /**
     * @return bool
     */
    public function send(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function confirmmationMessage(): string
    {
        return 'The message has been sent with Mailer';
    }

    /**
     * @return string
     */
    public function errorMessage(): string
    {
        return 'An error occurred with the attempt of sending of the message with Mailer';
    }
}
