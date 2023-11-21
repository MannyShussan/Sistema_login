<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="style/dashboard.css">
</head>

<body>
    <?php
    require_once "php/header.php";
    $header = new Header("Miranda", "index.php");
    echo $header->setHeader();
    ?>
    <main class="body-site">
        <?php
        echo <<< php
        <ul class="right-menu" id="lateral">
            <li>Painel</li>
            <li>Posts</li>
            <li>Mídia</li>
            <li>Páginas</li>
            <li>Comentários</li>
            <li>Aparência</li>
            <li>Plugins</li>
            <li>Usuários</li>
            <li>Ferramentas</li>
            <li>Configurações</li>
        </ul>
        php;
        ?>
    </main>

    <script src="scripts/menu.js"></script>
</body>

</html>