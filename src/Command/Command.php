<?php

declare(strict_types=1);

namespace App\Command;

use App\Service\Repository;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class Command extends \Symfony\Component\Console\Command\Command
{
    public function __construct(private readonly Repository $repository)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        parent::configure();
        $this->setName('t');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->writeln('self::class executed');


        $this->repository->checker();

        return self::SUCCESS;
    }
}
