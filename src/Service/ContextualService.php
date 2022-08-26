<?php

declare(strict_types=1);

namespace App\Service;

final class ContextualService
{
    public function __construct(private readonly Repository $repository)
    {
    }

    public function getSomethingFromSomewhere(): string
    {
        return $this->repository->getSomething();
    }
}
