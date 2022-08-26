<?php

declare(strict_types=1);

namespace App\Service;

use Monolog\Formatter\FormatterInterface;
use Monolog\LogRecord;

final class ComplicatedLogger implements FormatterInterface
{
    public function __construct(private readonly ContextualService $contextualService)
    {
    }

    private function enrichLog(LogRecord $record): string
    {
        $something = $this->contextualService->getSomethingFromSomewhere();
        return "[$something] $record->message\n";
    }

    public function format(LogRecord $record): string
    {
        return $this->enrichLog($record);
    }

    public function formatBatch(array $records): array
    {
        return array_map($this->enrichLog(...), $records);
    }
}
