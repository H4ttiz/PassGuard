<?php

$page = $_GET['page'] ?? 'login';
$base = __DIR__;



$view = $base . '/views/error/404.php'; 

switch ($page) {

    case 'login':
        $view = $base . '/views/auth/login.php';
        break;

    case 'registrar':
        $view = $base . '/views/auth/registro.php';
        break;

    case 'home':
        $view = $base . '/views/home/home.php';
        break;

    case 'dashboard':
        $view = $base . '/views/dashboard/dashboard.php';
        break;

    case 'contas':
        $view = $base . '/views/accounts/contas.php';
        break;

    case 'perfil':
        $view = $base . '/views/profile/perfil.php';
        break;

    case 'logout':
        include $base . '/controllers/logout.php';
        exit; // importante: para o script depois do logout
}


include $base . '/views/layouts/header.php';


if (!in_array($page, ['login', 'registrar']) && $view !== $base . '/views/error/404.php') {
    include $base . '/views/layouts/nav.php';
}


include $view;


include $base . '/views/layouts/footer.php';

?>