<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Schedule\ScheduleManager;
use Tavaan\Engine\Schedule\ScheduleManagerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور ScheduleManager.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class ScheduleManagerTest extends TestCase
{
    private ScheduleManager $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new ScheduleManager($config);
    }

    /**
     * T-01: Cron parser: `*/5 * * * *`, `0 3 * * *`, `0 0 1 * *`
     */
    public function test_t01_cron_parser_5_____0_3____0_0_1(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: `isDue` در مرزها
     */
    public function test_t02_is_due__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Fluent: `daily()->at('03:00')`
     */
    public function test_t03_fluent_dailyat0300(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: Mutex: دو اجرای همزمان → یکی
     */
    public function test_t04_mutex_____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: onOneServer: دو سرور → یکی
     */
    public function test_t05_on_one_server____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: timezone
     */
    public function test_t06_timezone(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: nextRunDates
     */
    public function test_t07_next_run_dates(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

}