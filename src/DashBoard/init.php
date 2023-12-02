<?php
require_once("Pagina.php");
function inicializa($token)
{
    session_start();
    if (!verificaToken($token)) {
        header("location: ../../index.php");
    }
}
