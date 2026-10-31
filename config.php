<?php
// ====== EDIT THESE 4 LINES with your InfinityFree MySQL details ======
const DB_HOST = 'sqlXXX.infinityfree.com';
const DB_NAME = 'if0_XXXXXXXX_dispatch';
const DB_USER = 'if0_XXXXXXXX';
const DB_PASS = 'YOUR_PASSWORD';
// =====================================================================

function db(): PDO {
    static $pdo = null;
    if (!$pdo) {
        $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8mb4', DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    return $pdo;
}
function start_session(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_set_cookie_params(['lifetime' => 0, 'path' => '/', 'httponly' => true, 'samesite' => 'Lax', 'secure' => !empty($_SERVER['HTTPS'])]);
        session_start();
    }
}
function go(string $url): void { header('Location: '.$url); exit; }

const NEXT_ALLOWED = ['index.php','loads-local.php','loads-outside.php','truck-30t.php','truck-superlink.php','truck-reefer.php','truck-notrailer.php','truck-below30.php','truck-work.php'];
function safe_next($n): string { return in_array($n, NEXT_ALLOWED, true) ? $n : ''; }
