<?php
require_once('../token.php');
require_once("../chave.php");
class Token
{
    private $user;
    private $id;
    private $exp;
    private $token;

    public function getUser(): string
    {
        return $this->user;
    }
    public function getId(): string
    {
        return $this->id;
    }
    public function getExp(): bool
    {
        if ($this->exp >= time()) {
            return true;
        }
        return false;
    }
    public function getToken(): string
    {
        return $this->token;
    }
    private function setExp()
    {
        $this->exp = time() + duracaoSessao();
    }

    public function __construct()
    {
        $args = func_get_args();
        $totArgs = func_num_args();
        if ($totArgs != 1) {
            $this->user = $args[0];
            $this->id = $args[1];
            $this->setExp();
            $this->setToken();
        } else {
            $this->token = $args[0];
            $pas = $this->abreToken($args[0]);
            if ($pas != false) {
                $this->user = $pas->user;
                $this->id = $pas->id;
                $this->exp = $pas->exp;
            }
        }
    }

    public function setToken()
    {
        if ($this->getExp()) {
            $this->token = createToken($this->user, $this->id);
            $this->setExp();
            return true;
        }
        return false;
    }

    public function confereToken($tk)
    {
        return verificaToken($tk);
    }

    public function abreToken($tk)
    {
        return validToken($tk);
    }
}
