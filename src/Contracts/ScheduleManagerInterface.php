<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule\Contracts;

/**
 * قرارداد ScheduleManager.
 *
 * @see \Tavaan\Engine\Schedule\ScheduleManager
 * @api 1.0
 */
interface ScheduleManagerInterface
{
    /**
     * متد command.
     *
     * @return mixed
     */
    public function command(/* ... */): mixed;

    /**
     * متد job.
     *
     * @return mixed
     */
    public function job(/* ... */): mixed;

    /**
     * متد call.
     *
     * @return mixed
     */
    public function call(/* ... */): mixed;

    /**
     * متد exec.
     *
     * @return mixed
     */
    public function exec(/* ... */): mixed;

    /**
     * متد events.
     *
     * @return mixed
     */
    public function events(/* ... */): mixed;
}