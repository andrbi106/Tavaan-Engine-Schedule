<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule;

final class CronExpression
{
    public function isDue(/* ... */): mixed
    {
        return $this->getProperty("due");
    }
    public function nextRunDates(/* ... */): mixed
    {
        return null;
    }
}
