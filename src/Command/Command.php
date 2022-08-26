<?php

declare(strict_types=1);

namespace App\Command;

use App\Service\ContextualService;
use App\Service\Repository;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class Command extends \Symfony\Component\Console\Command\Command
{
    public function __construct(
        private readonly Repository $repository,
        private readonly ContextualService $contextualService,
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        parent::configure();
        $this->setName('t');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->repository->checker();
        $this->contextualService->checker();

        return self::SUCCESS;
    }
}
