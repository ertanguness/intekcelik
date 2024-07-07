<?php
$page = isset($_GET['page']) ? $_GET['page'] : parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$page = trim($page, '/');

//Birden fazla sayfa için active class eklemek için fonksiyon
// örnek kullanım: hasActive('index','about','contact')
function hasActive() {
    global $page;
    $params = func_get_args();

    foreach ($params as $param) {
        if (trim($param) === $page) {
            echo 'active';
        }
    }
    echo '';
}
