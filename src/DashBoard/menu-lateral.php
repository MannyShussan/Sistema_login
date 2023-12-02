<?php
function menuLateral($num = false, $nivel = 1)
{
    $sessao = $_SESSION["token"];
    $class = $num ? "" : "sumir";
    if ($nivel >= 1) {
        $adm = "";
    } else {
        $adm = "<a class=\"button\" href=\"Usuarios.php?token={$_SESSION['token']}\">Usuários</a>";
    }
    return <<< MENU
<div class="right-menu $class" id="lateral">
            <a class="button" href="Perfil.php?token=$sessao">Perfil</a>
            <a class="button" href="DashBoard.php?token=$sessao">DashBoard</a>
            <a class="button" href="Dispositivos.php?token=$sessao">Dispositivos</a>
            $adm
            <a class="button">Configuração</a>
            <a class="button">Ajuda</a>
        </div>

MENU;
}

function logout($index)
{
    return <<<LOGOUT
        <nav id="menu-1" class="ocultar">
                <ul>
                    <li><a href="$index" class="lista"><img src="../../assets/log-out-outline.svg" alt="" class="icons"> Logout</a></li>
                </ul>
            </nav>

    LOGOUT;
}
