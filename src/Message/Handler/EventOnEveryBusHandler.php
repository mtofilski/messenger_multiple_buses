<?php

declare(strict_types=1);

namespace App\Message\Handler;

use App\Message\SendMail;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class EventOnEveryBusHandler implements MessageHandlerInterface
{
    public function __invoke(SendMail $message)
    {
        return 'OK';
    }
}
