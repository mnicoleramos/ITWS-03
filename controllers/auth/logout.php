<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

session_unset();
$_SESSION = [];

if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 3600, $params['path'] ?: '/');
}

session_destroy();

header('Location: /auth/login');
exit;