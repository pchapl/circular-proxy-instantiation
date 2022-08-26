<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Bar;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

final class Repository
{
    private readonly EntityRepository $repository;

    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
        $this->repository = $this->entityManager->getRepository(Bar::class);
    }

    public function getSomething(): string
    {
        return bin2hex(random_bytes(16));
    }

    public function checker(): void
    {
        $reflectionClass = new \ReflectionClass($this->repository);
        $reflectionMethod = $reflectionClass->getMethod('getEntityManager');
        /** @var EntityManagerInterface $entityManager */
        $entityManager = $reflectionMethod->invoke($this->repository);

        dump(
            [
                $this->entityManager->getUnitOfWork() === $entityManager->getUnitOfWork(),
                $this->entityManager === $entityManager,
            ],
        );
    }
}
