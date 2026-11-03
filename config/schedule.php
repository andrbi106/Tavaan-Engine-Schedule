<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Schedule Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور schedule — همهٔ کلیدهای مستندشده در `docs/03-engines/schedule.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/schedule.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('SCHEDULE_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('SCHEDULE_PREFIX', 'schedule:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('SCHEDULE_LOG_CHANNEL', 'schedule'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];