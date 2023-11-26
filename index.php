<?php
require_once("src/token.php");
// if (isset($_GET["token"])) {
//     $token = $_GET["token"];
//     header("location: src/DashBoard/Dashboard.php?token=$token");
// } else {
//     $token = createToken("MannyShussan", '73', (60 * 15));
//     header("location: src/DashBoard/DashBoard.php?token=$token");
// }
$text = explode("/", $_SERVER["PHP_SELF"]);
$text = $text[1] . '/src/confereLogin.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Tela de login</title>
</head>

<body>
    <div class="login">
        <fieldset class="campo">
            <legend>Login</legend>
            <form action="<?= $text ?>" method="post" class="formulario">
                <label for="user">Usuário:</label>
                <input type="text" name="user" id="user" placeholder="Usuário">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Senha">
                <input type="submit" value="Entrar" id="logar" disabled>
            </form>
        </fieldset>
    </div>
    <script src="scripts/logar.js"></script>
</body>

</html>