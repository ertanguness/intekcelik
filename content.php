<?php
require_once 'layouts/config.php';



$page = isset($_GET['page']) ? $_GET['page'] : parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Başı ve sonundaki / işaretlerini temizleyin
$page = trim($page, '/');
$page = trim($page, '#');

// $link = $_SERVER['PHP_SELF'];
// $link_array = explode('/',$link);
// $page = end($link_array);

if ($page == 'index.php' || $page == '') {
    $page = 'admin-dashboard';
}


$pagePath = 'pages/' . $page . '.php';

if (file_exists($pagePath)) {
    require_once($pagePath);
} else {
    include('404.php'); // Hata sayfası
}


