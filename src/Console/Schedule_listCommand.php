<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * schedule:list command.
 */
final class Schedule_listCommand implements CommandInterface
{
    public function name(): string
    {
        return 'schedule:list';
    }

    public function description(): string
    {
        return 'Run schedule:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
