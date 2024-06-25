
<?php require_once 'layouts/session.php'; ?>
<?php include_once 'layouts/head-main.php'; ?>

<head>

    <?php include_once 'layouts/head-css.php'; ?>
    <title><?php echo $page ;?></title>
    <?php include_once 'layouts/title-meta.php'; ?>


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