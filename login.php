<?php
require __DIR__.'/config.php'; start_session();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') go('login.html');
$email = strtolower(trim($_POST['email'] ?? ''));
$pw    = $_POST['password'] ?? '';
$next  = safe_next($_POST['next'] ?? '');
$q     = $next ? '&next='.urlencode($next) : '';
try {
    $s = db()->prepare('SELECT id, full_name, password_hash FROM users WHERE email = ?');
    $s->execute([$email]);
    $u = $s->fetch();
} catch (Throwable $e) { go('login.html?error=server'.$q); }
if (!$u || !password_verify($pw, $u['password_hash'])) { usleep(500000); go('login.html?error=invalid'.$q); }
session_regenerate_id(true);
$_SESSION['uid'] = (int)$u['id']; $_SESSION['name'] = $u['full_name'];
go($next ?: 'index.php');
