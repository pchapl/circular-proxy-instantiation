<?php

declare(strict_types=1);

namespace App\Service;

final class ContextualService
{
    public function __construct(private readonly Repository $repository)
    {
    }
}
