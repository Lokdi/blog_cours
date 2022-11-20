<?php
namespace controllers\frontController;

use services\formulaire\Formulaire;

class RegisterController
{
    public function __construct()
    {
        $this->formulaire = new Formulaire();
    }

    public function register()
    {
        if ($_GET['op'] == 'edit' && !empty($_GET['id']) && is_numeric($_GET['id'])) {
//            $_SESSION['inscrit'] = 'OUI';
        }
        $this->formulaire->validationForm();
        require('./views/inscription.view.php');
    }
}