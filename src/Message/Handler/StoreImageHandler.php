<?php

declare(strict_types=1);

namespace App\Message\Handler;

use App\Message\StoreImage;

final class StoreImageHandler implements EventHandlerInterface
{
    public function __invoke(StoreImage $message)
    {
        return 'OK';
    }
}
