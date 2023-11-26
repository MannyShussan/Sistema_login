<?php
namespace src\DashBoard\Corpo;
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

        $saida = "<section class=\"devices\">";
        for ($i = 0; $i < count($this->comodos); $i++) {
            $saida .= "<h2>Dispositivos - " . $this->comodos[$i] . "</h2>\n<div class=\"container-disp\">";
            $res = find($this->comodos[$i], $this->result, "nome");
            for ($j = 0; $j < count($res); $j++) {
                $saida .= "<div class=\"disp ";
                $saida .= $res[$j]["tipo"] . "-" . ($res[$j]["estado"] == 1 ? "on" : "off") . "\">\n";
                $saida .= "<h3>" . $res[$j]["tipo"] . " - " . $j + 1 . "</h3>\n";
                $saida .= "<p>Corrente: 1.2A</p>\n";
                $saida .= "<p>Consumo mensal: " . $res[$j]["consumo"] . "W</p>\n</div>";
            }
            $saida .= "\n</div>";
            $saida .= "\n<div class=\"status\">\n";
            $saida .= "\t\t<h2>Status do Comodo</h2>";
            $saida .= "\n\t\t<div class=\"status-container\">";
            $saida .= "\n\t\t\t<p>Temperatura ambiente: 26°C</p>";
            $saida .= "\n\t\t\t<p>Umidade: 50%</p>";
            $saida .= "\n\t\t\t<p>Luminosidade: Clara</p>";
            $saida .= "\n\t\t</div>\n\t</div>";
        }
        $saida .= "\n</section>\n";
        return $saida;
    }
}
