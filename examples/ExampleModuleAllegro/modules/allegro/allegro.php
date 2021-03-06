<?php


class allegro extends Module
{
    const MODULE_NAME = 'allegro';

    protected $_html;
    protected $_display;

    function __construct()
    {
        ini_set("display_errors", 0);
        error_reporting(0); //E_ALL
        $this->name = 'allegro';
        $this->tab = 'administration';
        $this->className = 'Configuration';
        $this->version = '1.0.1';
        $this->author = 'damian-pm';
        $this->psver = $this->psversion();
        parent::__construct();
        $this->bootstrap = true;
        $this->displayName = $this->l('Allegro Magazyn');
        $this->description = $this->l('Serwis aukcyjny syncho magazyn');
    }

    public function getContent() {
        return '<h4><a href="/admin-dev/modules/allegro">allegro controller - click me</a></h4>';
    }

    function install()
    {
        if (parent::install() == false)
        {
            return false;
        }
        return true;
    }
    public function uninstall(){
        if (parent::uninstall() == false)
        {
            return false;
        }

        return true;
    }

    public function renderResult()
    {

    }

    public function AddForm()
    {

    }

    public static function psversion($part = 1)
    {
        $version = _PS_VERSION_;
        $exp = $explode = explode(".", $version);
        if ($part == 1)
        {
            return $exp[1];
        }
        if ($part == 2)
        {
            return $exp[2];
        }
        if ($part == 3)
        {
            return $exp[3];
        }
    }

    public function displayForm() {}
}

?>