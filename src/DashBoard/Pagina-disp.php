<?php

require_once("header.php");
require_once("menu-lateral.php");
require_once("Token.php");
require_once("../token.php");
require_once("Token.php");
require_once("Pagina.php");

class Pagina_disp extends Pagina
{

    public function __construct($token, $corpo, $pag, array $arg)
    {
        parent::__construct($token, $corpo, $pag, $arg);
    }
    protected function script()
    {
        return "<script src=\"../../scripts/dispositivos.js\"></script>";
    }
}
