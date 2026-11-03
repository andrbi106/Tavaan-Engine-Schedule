<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule;

final class CronExpression
{
    public function isDue(): bool
    {
        return true;
    }
    public function nextRunDates()
    {
        return null;
    }
}
