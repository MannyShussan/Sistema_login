<?php
require_once("src/token.php");
require_once("src/request.php");
$user = $_POST["user"] ?? '';
$password = $_POST["password"] ?? '';
$oculto = 'oculto';
if (isset($_POST["user"]) && isset($_POST["password"]) && ($password != '') && ($user != '')) {
    $log = checkPassword($user, $password);
    if ($log) {
        $token = createToken($log["user"], $log["ID"]);
        session_start();
        $_SESSION["user"] = $log['user'];
        $_SESSION["nome"] = $log['nome'];
        $_SESSION["id"] = $log['ID'];
        $_SESSION["sobrenome"] = $log['sobrenome'];
        $_SESSION["nivel"] = $log['nivel'];
        $_SESSION["email"] = $log['email'];
        $_SESSION["token"] = $token;
        header("location: src/DashBoard/DashBoard.php?token=$token");
    } else {
        $oculto = '';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="assets/lock-closed-outline.svg" type="image/x-icon">
    <title>Tela de login</title>
</head>

<body>
    <div class="login">
        <fieldset class="campo">
            <legend>Login</legend>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="formulario">
                <label for="user">Usuário:</label>
                <input type="text" name="user" id="user" placeholder="Usuário">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Senha">
                <input type="submit" value="Entrar" id="logar">
            </form>
            <small class="<?= $oculto ?>" id="aviso">Usuário ou senha incorretas</small>
        </fieldset>
    </div>
    <script src="scripts/logar.js"></script>
</body>

</html>