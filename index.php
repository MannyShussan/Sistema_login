<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php 
    require_once "php/header.php";
    $header = new Header(0, "Pagina de login", "assets/finger-print.svg", "index.php");

    echo $header->setHeader();
    ?>
</body>
</html>