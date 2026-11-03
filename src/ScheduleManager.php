<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * ScheduleManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Schedule\Contracts\ScheduleManagerInterface
 */
final class ScheduleManager implements Contracts\ScheduleManagerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function command(/* ... */): mixed
    {
        // TODO: پیاده‌سازی command مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function job(/* ... */): mixed
    {
        // TODO: پیاده‌سازی job مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function call(/* ... */): mixed
    {
        // TODO: پیاده‌سازی call مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function exec(/* ... */): mixed
    {
        // TODO: پیاده‌سازی exec مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function events(/* ... */): mixed
    {
        // TODO: پیاده‌سازی events مطابق مستندات (سند §3 API).
        return null;
    }
}