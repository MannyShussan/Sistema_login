<?php
spl_autoload_register(function ($class) {
    $prefix = explode("\\", $class);
    array_pop($prefix);
    $prefix = implode("\\", $prefix);
    $prefix = "../../" . str_replace("\\", DIRECTORY_SEPARATOR, $prefix) . ".php";
    if (file_exists($prefix)) {
        require_once $prefix;
    }
});
