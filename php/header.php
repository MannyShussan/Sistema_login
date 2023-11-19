<?php
class Header
{
    private $logo;
    private $title;
    private $icons;
    private $home;

    //-------------------------------------------------------------------------------------
    private function setLogo($logo)
    {
        $this->logo = $logo;
    }
    private function setTitle($title)
    {
        $this->title = $title;
    }
    private function setIcons($icons)
    {
        $this->icons = $icons;
    }
    private function setHome($home)
    {
        $this->home = $home;
    }

    //-------------------------------------------------------------------------------------
    public function getLogo()
    {
        return $this->logo;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getIcons()
    {
        return $this->icons;
    }
    public function getHome()
    {
        return $this->home;
    }

    //-------------------------------------------------------------------------------------
    public function __construct($logo, $title, $icons, $home)
    {
        $this->setLogo($logo);
        $this->setTitle($title);
        $this->setIcons($icons);
        $this->setHome($home);
    }

    //-------------------------------------------------------------------------------------
    public function setHeader()
    {
        return "<header><img src=" . $this->getLogo() . " class=\"logo\"><h2>" . $this->getTitle() . "</h2></header>";
    }
}
