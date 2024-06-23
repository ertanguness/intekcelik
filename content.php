<?php
require_once 'layouts/config.php';
$page = isset($_GET['page']) ? $_GET['page'] : parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Başı ve sonundaki / işaretlerini temizleyin
$page = trim($page, '/');

if ($page == 'index.php' || $page == '') {
    $page = 'admin-dashboard';
}


$pagePath = 'pages/' . $page . '.php';

if (file_exists($pagePath)) {
    include($pagePath);
} else {
    include('pages/error-404.php'); // Hata sayfası
}