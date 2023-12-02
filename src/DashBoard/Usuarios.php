<?php
require_once("Pagina.php");
require_once("init.php");

inicializa($_GET['token']);
$token = ($_GET['token']);
$site = <<<SITE
            <div class="container-user">
                <fildset>
                    <legend class="titulo">Adicionar Usuário</legend>
                    <form action="{$_SERVER["PHP_SELF"]}" method="post" class="formulario">
                        <label for="user">Usuário:</label>
                        <input type="text" name="user" id="user">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome">
                        <label for="sobrenome">Sobreome:</label>
                        <input type="text" name="sobrenome" id="sobrenome">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha">
                    </form>
                </fieldset>
            </div>
SITE;

$perfil = new Pagina($token, $site, 'Usuario', $_SESSION);
$perfil->render();
