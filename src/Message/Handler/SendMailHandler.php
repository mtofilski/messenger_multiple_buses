<?php

declare(strict_types=1);

namespace App\Message\Handler;

use App\Message\SendMail;

final class SendMailHandler implements CommandHandlerInterface
{
    public function __invoke(SendMail $message)
    {
        return 'OK';
    }
}
