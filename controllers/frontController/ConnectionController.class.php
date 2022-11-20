<?php
namespace controllers\frontController;

use services\gestionConnexion\GestionConnexion;

class ConnectionController
{
    public function __construct()
    {
        $this->gestionConnexion = new GestionConnexion;
    }

    public function Connect()
    {
        $this->gestionConnexion->connexion();
        require('./views/inscription.view.php');
    }

}