<?php include 'layouts/session.php'; ?>
<?php


$page = isset($_GET['page']) ? $_GET['page'] : parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$page = str_replace("/", "", $page);
$page = str_replace(".php", "", $page);

if ($page == "" || $page == "index") {
    header("Location: index.php?page=home");
}
?>
<?php
if ($_SESSION['login'] == false) {
    header('Location: login.php');
}
?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Ana Sayfa - İntek Çelik</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>

    <div class="main-wrapper">
        <?php include 'layouts/menu.php'; ?>
        <?php include 'configs/connect.php'; ?>


        <!-- <div id="loader-wrapper">
                <div id="loader">
                    <div class="loader-ellips">
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                    </div>
                </div>
            </div> -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">


            <!-- Page Content -->
            <div class="content container-fluid" id="content">

                <?php


                // $page = file_exists($page . ".php") ? $page : header("Location: error-404.php");
                include_once $page . ".php" ?>
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->


    <?php include 'layouts/customizer.php'; ?>
    <!-- JAVASCRIPT -->
    <?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>