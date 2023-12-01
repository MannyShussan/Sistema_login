<?php

use src\DashBoard\Corpo\Corpo;
use src\DashBoard\Header\Header;

require_once("../Autoload.php");
require_once("menu-lateral.php");
require_once("../token.php");

if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $validToken = validToken($token);
    if ($validToken == false) {
        header("location: ../../index.php");
    }
    session_start();
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
    <title>DashBoard</title>
    <link rel="stylesheet" href="../../style/dashboard.css">
    <link rel="shortcut icon" href="../../assets/DashBoard.svg" type="image/x-icon">
</head>

<body>
    <?php
    $header = new Header($_SESSION["user"], "DashBoard.php?token=$token");
    $body = new Corpo();
    echo $header->setHeader();
    ?>
    <main class="body-site">
        <?php
        echo logout();
        echo menuLateral(true);
        ?>
        <?php
        echo $body->setBody();
        ?>
    </main>

    <script src="../../scripts/menu.js"></script>
    <script src="../../scripts/dispositivos.js"></script>
</body>

</html>