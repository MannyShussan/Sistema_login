<?php
require_once("Pagina.php");
require_once("init.php");

inicializa($_GET['token']);
$token = ($_GET['token']);
$self = $_SERVER["PHP_SELF"] . "?token=$token";
$site = <<<SITE
            


SITE;

$perfil = new Pagina($token, $site, 'Dispositivos', $_SESSION);
$perfil->render();
