# Tavaan Engine — Schedule

> **زمان‌بندی** — موتور Schedule در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.schedule` |
| نام | `Schedule` |
| عنوان فارسی | زمان‌بندی |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Schedule` |
| نوع | `engine` |
| Facade | `Schedule` (accessor: `schedule`) |

## توضیحات

M5 — Cron Expression Parser خودنوشته (۵ فیلد + OR کلاسیک DOM/DOW)، Fluent API، Overlap Prevention با mutex اتمیک، onOneServer، runInBackground. فقط یک entry در crontab: schedule:run.

## خطاها (Exceptions)

- `Tavaan\Engine\Schedule\Exceptions\InvalidCronException`

## Facadeها

- `Tavaan\Engine\Schedule\Facades\Schedule`

## کلاس‌های اصلی

- `src/Console/ScheduleListCommand.php`
- `src/Console/ScheduleRunCommand.php`
- `src/CronExpression.php`
- `src/ScheduleEvent.php`
- `src/schedule.php`

## Service Providerها

- `Tavaan\Engine\Schedule\ScheduleManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `console`

**موتورهای اختیاری:**

- `cache`
- `queue`
- `log`

## دستورات CLI

- `schedule:run`
- `schedule:list`

## پیکربندی

- فایل پیکربندی: `config/schedule.php`
- کلید: `schedule`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Schedule.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Schedule`** (این مخزن) | موتور Schedule |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
