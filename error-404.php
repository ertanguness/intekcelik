<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Sayfa Bulunamdı | İntek Çelik</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

 <body class="error-page">
       <!-- Main Wrapper -->
        <div class="main-wrapper">
            
            <div class="error-box">
                <h1>404</h1>
                <h3><i class="fa fa-warning"></i> Oops! Sayfa Bulunamdı!</h3>
                <p>Gitmek istediğiniz sayfa yok veya kaldırılmış!</p>
                <a href="index.php?page=home" class="btn btn-custom">Ana Sayfaya Dön</a>
            </div>
        
        </div>
        <!-- /Main Wrapper -->

        <!-- JAVASCRIPT -->
       <?php include 'layouts/vendor-scripts.php'; ?>

    </body>

</html>