<?php
    define("APP_URL", "http://localhost/LP-UACO-2024/public/");
    define("APP_URI", $_SERVER["DOCUMENT_ROOT"] . "/LP-UACO-2024/app/");

    define("APP_TEMPLATE", APP_URI . "resources/template/");
    define("APP_VIEWS", APP_URI . "resources/views/");

    CONST APP_TOKEN = "CLAVE_SECRETA";

    CONST APP_DEFAULT_CONTROLLER = "inicio";
    CONST APP_DEFAULT_ACTION = "index";