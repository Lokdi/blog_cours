<?php
namespace services\gestionConnexion;

use models\BlogManager;

class GestionConnexion
{
    public function __construct()
    {
        $this->blogManager = new BlogManager;
    }

    public function connexion()
    {
        if($_POST) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->blogManager->connexionUser($username, $password);
        }
    }
}