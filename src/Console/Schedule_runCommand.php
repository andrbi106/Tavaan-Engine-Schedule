<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * schedule:run command.
 */
final class Schedule_runCommand implements CommandInterface
{
    public function name(): string
    {
        return 'schedule:run';
    }

    public function description(): string
    {
        return 'Run schedule:run (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
