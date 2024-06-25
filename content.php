<?php
require_once 'layouts/config.php';



$page = isset($_GET['page']) ? $_GET['page'] : parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Başı ve sonundaki / işaretlerini temizleyin
$page = trim($page, '/');

// $link = $_SERVER['PHP_SELF'];
// $link_array = explode('/',$link);
// $page = end($link_array);

if ($page == 'index.php' || $page == '') {
    $page = 'admin-dashboard';
}

echo "page : " . $page;
// echo '	<!-- Loader -->
// 			<div id="loader-wrapper">
// 				<div id="loader">
// 					<div class="loader-ellips">
// 					  <span class="loader-ellips__dot"></span>
// 					  <span class="loader-ellips__dot"></span>
// 					  <span class="loader-ellips__dot"></span>
// 					  <span class="loader-ellips__dot"></span>
// 					</div>
// 				</div>
// 			</div>
// 			<!-- /Loader -->';

$pagePath = 'pages/' . $page . '.php';

if (file_exists($pagePath)) {
    include($pagePath);
} else {
    include('pages/error-404.php'); // Hata sayfası
}


