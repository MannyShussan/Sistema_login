<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <?php
    require_once "php/header.php";
    require_once "php/menu-lateral.php";
    require_once "php/corpo.php";
    ?>
</head>

<body>
    <?php
    $header = new Header("Flávio Miranda", $_SERVER["PHP_SELF"]);
    $body = new Corpo();
    echo $header->setHeader();
    ?>
    <main class="body-site">
        <?php
        $url = $_SERVER["PHP_SELF"];
        echo menuLateral($url);
        ?>
        <?php 
        echo $body->setBody();
        ?>
    </main>

    <script src="scripts/menu.js"></script>
</body>

</html>