<?php
require_once("Pagina.php");
require_once("init.php");

inicializa($_GET['token']);
$token = ($_GET['token']);
$self = $_SERVER["PHP_SELF"] . "?token=$token";
$site = <<<EOF
        <section class="container-perfil">
            <form action="{$self}" method="post" class="container-info">

                <div class="container-campo">
                    <label for="user">Usuário:</label>
                    <input type="text" name="User" id="user" value="{$_SESSION['user']}" readonly>
                </div>
                <div class="container-campo">
                    <label for="nome">Nome:</label>
                    <input type="text" name="Nome" id="nome" value="{$_SESSION['nome']}" readonly>
                </div>
                <div class="container-campo">
                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="Sobrenome" id="sobrenome" value="{$_SESSION['sobrenome']}" readonly>
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
                    <input type="email" name="Email" id="email" value="{$_SESSION['email']}" readonly>
                </div>
                <div class="container-campo">
                    <input type="submit" value="SALVAR ALTERAÇÕES">
                </div>
            </form>
        </section>
   EOF;

$perfil = new Pagina($token, $site, 'perfil', $_SESSION);
$perfil->render();
