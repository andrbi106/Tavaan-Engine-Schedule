<?php
declare(strict_types=1);
namespace Tavaan\Engine\Schedule;

final class ScheduledTask
{
    public function __construct(
        public readonly string $name,
        public readonly mixed  $callback,
        public readonly string $expression = '* * * * *',
        public ?\DateTime $lastRun = null,
        public ?\DateTime $nextRun = null,
        public bool $withoutOverlapping = false,
        public ?int $maxRetries = null,
    ) {
        $this->nextRun ??= new \DateTime();
    }

    public function isDue(\DateTime $now): bool
    {
        if ($this->lastRun === null) return true;
        $next = clone $this->lastRun;
        $next->modify('+' . $this->secondsFromExpression() . ' seconds');
        return $now >= $next;
    }

    private function secondsFromExpression(): int
    {
        if (preg_match('/^(\d+)/', $this->expression, $m)) return (int)$m[1] * 60;
        return 60;
    }

    public function run(): mixed
    {
        $this->lastRun = new \DateTime();
        return ($this->callback)();
    }
}

final class ScheduleManager
{
    private array $tasks = [];

    public function __construct(private readonly array $config = []) {}

    public function add(ScheduledTask $task): self { $this->tasks[$task->name] = $task; return $this; }
    public function get(string $name): ?ScheduledTask { return $this->tasks[$name] ?? null; }
    public function has(string $name): bool { return isset($this->tasks[$name]); }
    public function all(): array { return array_values($this->tasks); }

    public function runDue(\DateTime $now): array
    {
        $executed = [];
        foreach ($this->tasks as $task) { if ($task->isDue($now)) { $task->run(); $executed[] = $task->name; } }
        return $executed;
    }

    public function runByName(string $name): mixed
    {
        $task = $this->get($name);
        return $task?->run();
    }

    public function count(): int { return count($this->tasks); }
    public function clear(): void { $this->tasks = []; }
}

final class ScheduleServiceProvider
{
    private ?ScheduleManager $manager = null;
    public function __construct(private readonly array $config = []) {}
    public function register(): void { $this->manager = new ScheduleManager($this->config); }
    public function boot(): void {}
    public function provides(): array { return [ScheduleManager::class, ScheduledTask::class]; }
    public function getManager(): ScheduleManager { if ($this->manager === null) $this->register(); return $this->manager; }

    public function call(/* ... */): mixed
    {
        return new \Tavaan\Engine\Http\Response(200, "");
    }
    public function command(/* ... */): mixed
    {
        return null;
    }
    public function events(/* ... */): mixed
    {
        return null;
    }
    public function exec(/* ... */): mixed
    {
        return null;
    }
    public function job(/* ... */): mixed
    {
        return null;
    }
}
