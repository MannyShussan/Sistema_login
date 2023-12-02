<?php

require_once("header.php");
require_once("menu-lateral.php");
require_once("Token.php");
require_once("../token.php");
require_once("Token.php");


class Pagina
{
    protected $id;
    protected $user;
    protected $nome;
    protected $sobreNome;
    protected $email;
    protected $token;
    protected $nivel;
    protected $corpo;
    protected $pagina;

    public function getId()
    {
        return $this->id;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getSsobreNome()
    {
        return $this->sobreNome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getToken()
    {
        return $this->token;
    }
    public function getNivel()
    {
        return $this->nivel;
    }

    public function __construct($token, $corpo, $pag, array $arg)
    {
        if (validToken($token)) {
            $this->corpo = $corpo;
            $this->id = $arg["id"];
            $this->user = $arg['user'];
            $this->nome = $arg['nome'];
            $this->sobreNome = $arg['sobrenome'];
            $this->email = $arg['email'];
            $this->nivel = $arg['nivel'];
            $this->pagina = $pag;
            $this->token = new Token($this->user, $this->id);
        }
    }

    public function __destruct()
    {
        $_SESSION['token'] = $this->token->getToken();
    }

    public function render()
    {
?>
        <!DOCTYPE html>
        <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../style/menu.css">
            <link rel="stylesheet" href="../../style/<?= $this->pagina ?>.css">
            <title><?= ucfirst($this->pagina) . " - " . $this->user ?></title>
            <link rel="shortcut icon" href="../../assets/<?= $this->pagina ?>.svg" type="image/x-icon">
        </head>

        <body>
            <?php
            $header = new Header($this->user, "DashBoard.php?token={$this->token->getToken()}");
            echo $header->setHeader();
            ?>
            <main class="body-site">
                <?php
                echo logout("../../index.php");
                echo menuLateral(true, $this->nivel);
                ?>
                <section class="main">
                    <div class="container-main">
                        <?php
                        echo $this->corpo;
                        ?>
                    </div>
                </section>
            </main>


            <script src="../../scripts/menu.js"></script>
            <?= $this->script() ?>
        </body>

        </html>

<?php
    }

    protected function script()
    {
        return "";
    }
}
