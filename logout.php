<h3>
    <?php
    session_start();
    session_destroy();
    header('Location: login.php');
    ?>
</h3>