<?php

require_once "../request.php";
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

    public function __construct()
    {
        $this->result = requestDevices();
        $this->setComodos($this->result);
        $this->setDispositivos($this->result);
    }

    public function setBody()
    {

        $saida = "";
        for ($i = 0; $i < count($this->comodos); $i++) {
            $saida .= "<h2>Dispositivos - {$this->comodos[$i]} </h2>\n<div class=\"container-disp\">";
            $res = find($this->comodos[$i], $this->result, "nome");
            for ($j = 0; $j < count($res); $j++) {
                $result = $res[$j]["estado"] == 1 ? "on" : "off";
                $soma = $j + 1;
                $saida .= <<<DOC
                <div class="disp {$res[$j]["tipo"]}-$result" id="{$res[$j]["id"]}" draggable="true">
                        <h3> {$res[$j]["tipo"]} - $soma </h3>
                        <p>Corrente: 1.2A</p>
                        <p>Consumo mensal: {$res[$j]["consumo"]}W</p>
                    </div>

                DOC;
            }
            $saida .= <<<DOC
                </div>
                    <div class="status">\n
                        <h2>Status do Comodo</h2>
                        <div class="status-container">
                            <p>Temperatura ambiente: 26°C</p>
                            <p>Umidade: 50%</p>
                            <p>Luminosidade: Clara</p>
                        </div>
                    </div>
                    
            DOC;
        }
        return $saida;
    }
}
