<?php
require_once "request.php";
class Corpo
{
    private $comodos;
    private $dispositivos;
    private $result;

    private function setComodos($array)
    {
        $this->comodos = filter("nome", $array);
    }

    private function setDispositivos($array)
    {
        $this->dispositivos = filter("tipo", $array);
    }

    public function getComodos()
    {
        return $this->comodos;
    }

    public function getDispositivos()
    {
        return $this->dispositivos;
    }

    public function __construct($tela = 0)
    {
        if ($tela == 0) {
            $this->result = requestDevices();
            $this->setComodos($this->result);
            $this->setDispositivos($this->result);
        }
    }
}
