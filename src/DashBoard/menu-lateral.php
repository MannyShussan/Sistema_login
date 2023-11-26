<?php
function menuLateral($url)
{
    return <<< MENU
<form action="$url" method="get" class="right-menu" id="lateral">
            <input type="submit" class="button" value="Painel" name="pg">
            <input type="submit" class="button" value="Comodos" name="pg">
            <input type="submit" class="button" value="Mídia" name="pg">
            <input type="submit" class="button" value="Páginas" name="pg">
            <input type="submit" class="button" value="Comentários" name="pg">
            <input type="submit" class="button" value="Aparência" name="pg">
            <input type="submit" class="button" value="Plugins" name="pg">
            <input type="submit" class="button" value="Usuários" name="pg">
            <input type="submit" class="button" value="Ferramentas" name="pg">
            <input type="submit" class="button" value="Configurações" name="pg">
        </form>

MENU;
}
