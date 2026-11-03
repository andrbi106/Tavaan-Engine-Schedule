<?php

declare(strict_types=1);

namespace Tavaan\Engine\Schedule;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Schedule\Contracts\ScheduleManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * ScheduleManagerServiceProvider — ثبت سرویس‌های موتور ScheduleManager.
 */
final class ScheduleManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(ScheduleManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new ScheduleManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Schedule\Console\Schedule_runCommand::class;
        $this->commands[] = \Tavaan\Engine\Schedule\Console\Schedule_listCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            ScheduleManagerInterface::class,
        ];
    }
}