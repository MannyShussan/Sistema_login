<?php
require_once("Pagina.php");
require_once("init.php");

inicializa($_GET['token']);
$token = ($_GET['token']);
$self = $_SERVER["PHP_SELF"] . "?token=$token";

$perfil = new Pagina($token, ("<div class=\"container-user\">
                                    <form action=\"{$self}\" method=\"post\" class=\"formulario\">
                                        <legend class=\"titulo\">Adicionar Usuário</legend>
                                        <div class=\"container\">
                                            <label for=\"user\">Usuário:</label>
                                            <input type=\"text\" name=\"user\" id=\"user\" placeholder=\"Usuário\">
                                        </div>
                                        <div class=\"container\">
                                            <label for=\"nome\">Nome:</label>
                                            <input type=\"text\" name=\"nome\" id=\"nome\" placeholder=\"Nome\">
                                        </div>
                                        <div class=\"container\">
                                            <label for=\"sobrenome\">Sobreome:</label>
                                            <input type=\"text\" name=\"sobrenome\" id=\"sobrenome\" placeholder=\"Sobrenome\">
                                        </div>
                                        <div class=\"container\">
                                            <label for=\"senha\">Senha:</label>
                                            <input type=\"password\" name=\"senha\" id=\"senha\" placeholder=\"Senha\">
                                        </div>
                                        <div class=\"container\">
                                            <label for=\"confSenha\">Confirmação da Senha:</label>
                                            <input type=\"password\" name=\"confSenha\" id=\"confSenha\" placeholder=\"Confirmação da Senha\">
                                        </div>
                                        <div class=\"container\">
                                            <input type=\"submit\" name=\"submit\" id=\"submit\" value=\"CADASTRAR\">
                                        </div>
                                    </form>
                                </div>"), 'Usuario', $_SESSION);
$perfil->render();
