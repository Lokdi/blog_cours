<?php


namespace controllers\frontController;


class DisconnectController
{

    public function disconnect()
    {
        $_SESSION= [];
        require('./views/homepage.view.php');
    }
}