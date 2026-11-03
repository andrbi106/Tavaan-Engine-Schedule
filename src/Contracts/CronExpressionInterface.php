<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule\Contracts;

/**
 * قرارداد CronExpression.
 *
 * @see \Tavaan\Engine\Schedule\CronExpression
 * @api 1.0
 */
interface CronExpressionInterface
{
    /**
     * متد isDue.
     *
     * @return mixed
     */
    public function isDue(/* ... */): mixed;

    /**
     * متد nextRunDates.
     *
     * @return mixed
     */
    public function nextRunDates(/* ... */): mixed;
}