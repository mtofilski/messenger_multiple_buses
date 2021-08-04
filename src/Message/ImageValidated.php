<?php

declare(strict_types=1);

namespace App\Message;

final class ImageValidated
{
    private int $id;

    public static function new(): self
    {
        return new self(random_int(1, 2000));
    }

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
