<?php

declare(strict_types=1);

namespace App\Service;

final class ComplicatedLogger
{
    public function __construct(private readonly ContextualService $contextualService)
    {
    }
}
