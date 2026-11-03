<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * CronExpression — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Schedule\Contracts\CronExpressionInterface
 */
final class CronExpression implements Contracts\CronExpressionInterface
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
    public function isDue(/* ... */): mixed
    {
        // TODO: پیاده‌سازی isDue مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function nextRunDates(/* ... */): mixed
    {
        // TODO: پیاده‌سازی nextRunDates مطابق مستندات (سند §3 API).
        return null;
    }
}