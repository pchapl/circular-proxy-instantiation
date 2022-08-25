<?php

declare(strict_types=1);

namespace App\Service;

class Repository
{
    public function __construct(private readonly ComplicatedLogger $logger)
    {
    }
}
