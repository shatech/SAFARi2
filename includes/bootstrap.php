<?php

declare(strict_types=1);

if (!defined('APP_ROOT')) {
    define('APP_ROOT', dirname(__DIR__));
}

$configFile = APP_ROOT . '/config/config.php';
$config = is_file($configFile) ? require $configFile : [];
$config = is_array($config) ? $config : [];
$appConfig = $config['app'] ?? [];
$dbConfig = $config['database'] ?? [];

if (!defined('APP_BASE_URL')) {
    $baseUrl = (string) ($appConfig['base_url'] ?? '/');
    define('APP_BASE_URL', rtrim($baseUrl, '/') . '/');
}
if (!defined('APP_ENV')) {
    define('APP_ENV', (string) ($appConfig['env'] ?? 'production'));
}
if (!defined('APP_DEBUG')) {
    define('APP_DEBUG', (bool) ($appConfig['debug'] ?? false));
}

date_default_timezone_set((string) ($appConfig['timezone'] ?? 'Asia/Tehran'));

if (session_status() !== PHP_SESSION_ACTIVE) {
    $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => APP_BASE_URL,
        'secure' => $https,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

function h(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function fa_num(string $value): string
{
    return strtr($value, ['0' => '۰', '1' => '۱', '2' => '۲', '3' => '۳', '4' => '۴', '5' => '۵', '6' => '۶', '7' => '۷', '8' => '۸', '9' => '۹']);
}

function database_is_configured(): bool
{
    global $dbConfig;
    return !empty($dbConfig['name']) && !empty($dbConfig['user']);
}

function verify_csrf_post(): bool
{
    $submitted = $_POST['_csrf'] ?? '';
    return is_string($submitted) && isset($_SESSION['_csrf']) && hash_equals($_SESSION['_csrf'], $submitted);
}

function set_flash(string $type, string $message): void
{
    $_SESSION['_flash'] = ['type' => $type, 'message' => $message];
}

function take_flash(): ?array
{
    $flash = $_SESSION['_flash'] ?? null;
    unset($_SESSION['_flash']);
    return is_array($flash) ? $flash : null;
}

function normalize_phone(string $phone): string
{
    return strtr(trim($phone), ['۰'=>'0','۱'=>'1','۲'=>'2','۳'=>'3','۴'=>'4','۵'=>'5','۶'=>'6','۷'=>'7','۸'=>'8','۹'=>'9','٠'=>'0','١'=>'1','٢'=>'2','٣'=>'3','٤'=>'4','٥'=>'5','٦'=>'6','٧'=>'7','٨'=>'8','٩'=>'9']);
}

function db_configured(): bool
{
    return database_is_configured();
}

function settings(string $key, string $default = ''): string
{
    global $pdo;
    static $cache = [];
    if (array_key_exists($key, $cache)) {
        return $cache[$key];
    }
    if (!($pdo instanceof PDO)) {
        return $cache[$key] = $default;
    }
    try {
        $statement = $pdo->prepare('SELECT setting_value FROM site_settings WHERE setting_key = ? LIMIT 1');
        $statement->execute([$key]);
        $value = $statement->fetchColumn();
        return $cache[$key] = ($value === false || $value === null ? $default : (string) $value);
    } catch (Throwable $exception) {
        error_log('Site setting read failed: ' . $exception->getMessage());
        return $cache[$key] = $default;
    }
}

// Shared database handle is initialized once from config/config.php for every page using the common header.
$pdo = null;
if (database_is_configured()) {
    try {
        $pdo = db();
    } catch (Throwable $exception) {
        error_log('Application database connection failed: ' . $exception->getMessage());
    }
}

function app_url(string $path = ''): string
{
    return APP_BASE_URL . ltrim($path, '/');
}

function csrf_token(): string
{
    if (empty($_SESSION['_csrf'])) {
        $_SESSION['_csrf'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['_csrf'];
}

function csrf_field(): string
{
    return '<input type="hidden" name="_csrf" value="' . h(csrf_token()) . '">';
}

function db(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    global $dbConfig;
    $host = (string) ($dbConfig['host'] ?? 'localhost');
    $name = (string) ($dbConfig['name'] ?? '');
    $user = (string) ($dbConfig['user'] ?? '');
    $pass = (string) ($dbConfig['pass'] ?? '');
    $charset = (string) ($dbConfig['charset'] ?? 'utf8mb4');
    if ($name === '' || $user === '') {
        throw new RuntimeException('Database configuration is missing. Set database credentials in config/config.php.');
    }

    $pdo = new PDO(
        "mysql:host={$host};dbname={$name};charset={$charset}",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
    $databaseTimezone = (string) ($dbConfig['timezone'] ?? '+03:30');
    $pdo->exec('SET time_zone = ' . $pdo->quote($databaseTimezone));
    return $pdo;
}
