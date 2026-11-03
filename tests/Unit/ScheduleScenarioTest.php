<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Schedule\CronExpression;
use Tavaan\Engine\Schedule\ScheduleManager;
use Tavaan\Engine\Schedule\ScheduledTask;

/**
 * T-NN scenario tests for the schedule engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class ScheduleScenarioTest extends TestCase
{'    public function t01_cron_every_minute_matches(): void\n    {\n        // Scenario T-01\n$c = new CronExpression("* * * * *");\n        $this->assertTrue($c->isDue(new \\DateTime("2026-11-04 12:00:00")));\n    }\n    public function t02_cron_5_minute_step(): void\n    {\n        // Scenario T-02\n$c = new CronExpression("*/5 * * * *");\n        $this->assertTrue($c->isDue(new \\DateTime("2026-11-04 12:00:00")));\n        $this->assertTrue($c->isDue(new \\DateTime("2026-11-04 12:05:00")));\n        $this->assertFalse($c->isDue(new \\DateTime("2026-11-04 12:03:00")));\n    }\n    public function t03_cron_hourly(): void\n    {\n        // Scenario T-03\n$c = new CronExpression("0 * * * *");\n        $this->assertTrue($c->isDue(new \\DateTime("2026-11-04 12:00:00")));\n        $this->assertFalse($c->isDue(new \\DateTime("2026-11-04 12:30:00")));\n    }\n    public function t04_next_run_dates_returns_count(): void\n    {\n        // Scenario T-04\n$c = new CronExpression("*/5 * * * *");\n        $dates = $c->nextRunDates(3);\n        $this->assertCount(3, $dates);\n    }\n    public function t05_schedule_manager_add_run(): void\n    {\n        // Scenario T-05\n$mgr = new ScheduleManager();\n        $hit = 0;\n        $mgr->add(new ScheduledTask("t1", fn() => $hit++, "* * * * *"));\n        $now = new \\DateTime();\n        $mgr->runDue($now);\n        $this->assertSame(1, $hit);\n    }'}
