<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once "includes/head.php";
        foreach($this->scripts as $script){
            echo '<script defer type="text/javascript" src="' . $script . '"></script>';
        }
    ?>
</head>
<body>
    <header>
        <?php
        if(isset($_SESSION["token"]) && $_SESSION["token"] == APP_TOKEN){
            require_once "includes/menu.php";
            require_once "includes/bread_crum.php";
        }
            
        ?>
    </header>
    <main>
        <?php

            require_once APP_VIEWS . $this->view;
        ?>
    </main>
    <footer>
        <?php
            require_once "includes/footer.php";
        ?>
    </footer>
</body>
</html>