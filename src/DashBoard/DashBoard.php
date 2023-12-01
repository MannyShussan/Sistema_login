<?php

use src\DashBoard\Corpo\Corpo;
use src\DashBoard\Header\Header;

require_once("../Autoload.php");
require_once("menu-lateral.php");
require_once("../token.php");

if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $validToken = validToken($token);
    if ($validToken == false || $validToken->exp <= time()) {
        header("location: ../../index.php");
    }
    session_start();
    $_SESSION["user"] = $validToken->user;
    $_SESSION["id"] = $validToken->id;
    $_SESSION["exp"] = $validToken->exp;
    $_SESSION["token"] = $token;
} else {
    header("location: ../../index.php");
}




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="../../style/dashboard.css">
    <link rel="shortcut icon" href="../../assets/finger-print.svg" type="image/x-icon">
</head>

<body>
    <?php
    $header = new Header($_SESSION["user"], "DashBoard.php");
    $body = new Corpo();
    echo $header->setHeader();
    ?>
    <main class="body-site">
        <?php
        echo logout();
        echo menuLateral();
        ?>
        <?php
        echo $body->setBody();
        ?>
    </main>

    <script src="../../scripts/menu.js"></script>
    <script src="../../scripts/dispositivos.js"></script>
</body>

</html>