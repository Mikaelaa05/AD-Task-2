<?php include_once __DIR__ . '/../utils/config.php'; ?>
<!DOCTYPE html>
<html>

    <head>
        <title><?php echo $theme; ?> Fan Page</title>

        <script>
            window.BASE_URL = "<?php echo BASE_URL; ?>";
        </script>

        <script src="<?php echo BASE_URL; ?>page/assets/js/character_navigation.js"></script>

        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">

        <?php
        $currentPage = basename($_SERVER['PHP_SELF'], '.php');
        $cssPath = BASE_URL . "page/assets/css/$currentPage.css";
        if (file_exists(__DIR__ . "/../page/assets/css/$currentPage.css")) {
            echo "<link rel='stylesheet' href='$cssPath'>";
        }
        ?>
    </head>

    <body>
        <header>
            <div class="header-content">
                <img src=" <?php echo BASE_URL; ?>assets/img/Bocchi_the_rock_logo_small.png" alt="Bocchi the Rock! logo"
                    class="logo-left">
                <?php include_once __DIR__ . '/navbar.php'; ?>
                <?php include_once __DIR__ . '/mp3_player.php'; ?>
                <img src="<?php echo BASE_URL; ?>assets/img/Kessoku_Band_Logo_Clear.png" alt="Kessoku Band logo"
                    class="logo-right">
            </div>
        </header>