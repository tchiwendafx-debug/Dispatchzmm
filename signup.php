<?php
require __DIR__.'/config.php'; start_session();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') go('signup.html');
$name  = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = strtolower(trim($_POST['email'] ?? ''));
$role  = $_POST['role'] ?? '';
$pw    = $_POST['password'] ?? '';
$pw2   = $_POST['confirm'] ?? '';
$next  = safe_next($_POST['next'] ?? '');
$q     = $next ? '&next='.urlencode($next) : '';
$roles = ['Customer with a load', 'Transporter with a truck', 'Both'];
if ($name === '' || mb_strlen($name) > 100 || $phone === '' || strlen($phone) > 30 || !filter_var($email, FILTER_VALIDATE_EMAIL) || !in_array($role, $roles, true)) go('signup.html?error=invalid'.$q);
if (strlen($pw) < 8) go('signup.html?error=weak'.$q);
if ($pw !== $pw2) go('signup.html?error=mismatch'.$q);
try {
    $pdo = db();
    $s = $pdo->prepare('SELECT id FROM users WHERE email = ?');
    $s->execute([$email]);
    if ($s->fetch()) go('signup.html?error=exists'.$q);
    $pdo->prepare('INSERT INTO users (full_name, phone, email, role, password_hash) VALUES (?,?,?,?,?)')
        ->execute([$name, $phone, $email, $role, password_hash($pw, PASSWORD_DEFAULT)]);
    $id = (int)$pdo->lastInsertId();
} catch (Throwable $e) { go('signup.html?error=server'.$q); }
session_regenerate_id(true);
$_SESSION['uid'] = $id; $_SESSION['name'] = $name;
go($next ?: 'index.php');
