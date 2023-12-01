<?php

use src\DashBoard\Header\Header;

require_once("../Autoload.php");
require_once("menu-lateral.php");
require_once("../token.php");
require_once("Token.php");

if (isset($_GET["token"])) {
    $verificacao = verificaToken($_GET['token']);
    session_start();
} else {
    header("location: ../../index.php");
}
if ($verificacao === false) {
    header("location: ../../index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/DashBoard.css">
    <link rel="stylesheet" href="../../style/perfil.css">
    <title>Perfil - <?= $_SESSION['user'] ?></title>
    <link rel="shortcut icon" href="../../assets/Perfil.svg" type="image/x-icon">
</head>

<body>
    <?php
    $token = $_SESSION['token'];
    $header = new Header($_SESSION["user"], "DashBoard.php?token=$token");
    echo $header->setHeader();
    ?>
    <main class="body-site">
        <?php
        echo logout();
        echo menuLateral(true);
        ?>
        <section class="container-perfil">
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" class="container-info">

                <div class="container-campo">
                    <label for="user">Usuário:</label>
                    <input type="text" name="User" id="user" value="<?= $_SESSION['user'] ?>" readonly>
                </div>
                <div class="container-campo">
                    <label for="nome">Nome:</label>
                    <input type="text" name="Nome" id="nome" value="<?= $_SESSION['nome'] ?>" readonly>
                </div>
                <div class="container-campo">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="Sobrenome" id="sobrenome" value="<?= $_SESSION['sobrenome'] ?>" readonly>
                </div>
                <div class="container-campo">
                    <label for="senha">Senha:</label>
                    <input type="password" name="Senha" id="senha" value="1234567891011" readonly>
                </div>
                <div class="container-campo">
                    <label for="novaSenha">Nova senha:</label>
                    <input type="password" name="NovaSenha" id="novaSenha">
                </div>
                <div class="container-campo">
                    <label for="confNovaSenha">Confirmação da nova senha:</label>
                    <input type="password" name="ConfNovaSenha" id="confNovaSenha">
                </div>
                <div class="container-campo">
                    <label for="email">E-mail:</label>
                    <input type="email" name="Email" id="email" value="<?= $_SESSION['email'] ?>" readonly>
                </div>
                <div class="container-campo">
                    <input type="submit" value="SALVAR ALTERAÇÕES">
                </div>
            </form>
        </section>
    </main>


    <script src="../../scripts/menu.js"></script>
</body>

</html>