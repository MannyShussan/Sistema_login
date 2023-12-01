<?php
function menuLateral()
{
    return <<< MENU
<div class="right-menu sumir" id="lateral">
            <a class="button">Perfil</a>
            <a class="button">DashBoard</a>
            <a class="button">Mídia</a>
            <a class="button">Páginas</a>
            <a class="button">Comentários</a>
            <a class="button">Aparência</a>
            <a class="button">Plugins</a>
            <a class="button">Usuários</a>
            <a class="button">Configuração</a>
            <a class="button">Ajuda</a>
        </div>

MENU;
}

function logout()
{
    return <<<LOGOUT
        <nav id="menu-1" class="ocultar">
                <ul>
                    <li><img src="../../assets/log-out-outline.svg" alt="" class="icons"> Logout</li>
                </ul>
            </nav>

    LOGOUT;
}
