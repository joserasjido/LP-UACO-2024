<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once "includes/head.php";
    ?>
</head>
<body>
    <header>
        <?php
            require_once "includes/menu.php";
            require_once "includes/bread_crum.php";
        ?>
    </header>
    <main>
        <?php

            require_once APP_VIEWS . $view;
        ?>
    </main>
    <footer>
        <?php
            require_once "includes/footer.php";
        ?>
    </footer>
</body>
</html>