<?php

declare(strict_types=1);

/**
 * تنظیمات محیط برنامه.
 * در هاست، مقادیر را با متغیر محیطی تنظیم کنید؛ در صورت نبود امکان، این فایل
 * را با اطلاعات دیتابیس همان هاست و با دسترسی محدود و خارج از دسترس عمومی تکمیل کنید.
 */
return [
    'app' => [
        'env' => getenv('APP_ENV') ?: 'production',
        'base_url' => getenv('APP_BASE_URL') ?: '/safarisaze/',
        'timezone' => getenv('APP_TIMEZONE') ?: 'Asia/Tehran',
        'debug' => filter_var(getenv('APP_DEBUG') ?: '0', FILTER_VALIDATE_BOOLEAN),
    ],
    'database' => [
        'host' => getenv('DB_HOST') ?: 'localhost',
        'name' => getenv('DB_NAME') ?: 'simorixit_safari',
        'user' => getenv('DB_USER') ?: 'simorixit_safari',
        'pass' => getenv('DB_PASS') ?: 'B@STTpR^)ag8s+yE',
        'charset' => 'utf8mb4',
        'timezone' => '+03:30',
    ],
];
