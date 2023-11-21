<?php
class Header
{
    private $title;
    private $home;

    //-------------------------------------------------------------------------------------
    private function setTitle($title)
    {
        $this->title = $title;
    }
    private function setHome($home)
    {
        $this->home = $home;
    }

    //-------------------------------------------------------------------------------------
    public function getTitle()
    {
        return $this->title;
    }
    public function getHome()
    {
        return $this->home;
    }

    //-------------------------------------------------------------------------------------
    public function __construct($title, $home)
    {
        $this->setTitle($title);
        $this->setHome($home);
    }

    //-------------------------------------------------------------------------------------
    public function setHeader()
    {
        return "<header class=\"header-user\"><p id=\"menu\"><img draggable=\"false\" src=\"assets/menu-outline.svg\" alt=\"menu\" class=\"icons\"></p><p>Logo aqui</p><a draggable=\"false\" href=\"".$this->getHome()."\"><img draggable=\"false\" src=\"assets/home-sharp.svg\" alt=\"home\" class=\"icons\"> Home</a><p><img draggable=\"false\" src=\"assets/person-circle-sharp.svg\" alt=\"user\" class=\"icons user\">".$this->getTitle()."</p><p><img draggable=\"false\" src=\"assets/notifications-sharp.svg\" alt=\"notificações\" class=\"icons\"> Notificações</p></header>";
    }
}
