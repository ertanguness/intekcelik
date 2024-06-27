<?php require_once 'layouts/session.php'; ?>
<?php include_once 'layouts/head-main.php'; ?>


<head>

    <?php include_once 'layouts/head-css.php'; ?>
    <title>İntek Çelik</title>


</head>

<body>


    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div id="loader-wrapper">
            <div id="loader">
                <div class="loader-ellips">
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                </div>
            </div>
        </div>

        <?php include 'layouts/menu.php'; ?>
        <!-- Page Wrapper -->
        <div class="page-wrapper">


            <!-- Page Content -->
            <div class="content container-fluid" id="content">

                <?php



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

                ?>

            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->
    </div>
    <!-- /Main Wrapper -->

    <?php include 'layouts/customizer.php'; ?>

    <?php include 'layouts/vendor-scripts.php'; ?>
    <script src="/assets/js/app.js"></script>
    <script src="/src/app.js"></script>

</body>

</html>