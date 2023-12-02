<?php
require_once("init.php");
require_once("Pagina-disp.php");
require_once("corpo.php");

inicializa($_GET['token']);
$token = ($_GET['token']);
$body = new Corpo();
$perfil = new Pagina_disp($token, $body->setBody(), 'DashBoard', $_SESSION);
$perfil->render();
