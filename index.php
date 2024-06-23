<?php require_once 'layouts/session.php'; ?>
<?php include_once 'layouts/head-main.php'; ?>

<head>

    <title>İntek Çelik</title>
    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>
    

<!-- Main Wrapper -->
<div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid" id="content">

            <?php
            // URL yolunu almak ve boşsa 'home' yapmak için parse_url ve trim kullanımı
            $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $page = trim($path, '/');

            // İçerik dosyasını dahil etme
            include('content.php');

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