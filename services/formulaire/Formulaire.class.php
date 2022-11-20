<?php
namespace services\formulaire;

use DateTime;
use Exception;
use models\BlogManager;
use models\User;

class Formulaire
{
    public function __construct()
    {
        $this->blogManager = new BlogManager;
    }

    public function validationForm()
    {
        if($_POST) {
            $errors = [];
            $fieldEmpty = 0;

            foreach ($_POST as $key => $value) {
                $_POST[$key] = htmlspecialchars($value);
                if (trim($_POST[$key] == '')) {
                    $fieldEmpty++;
                }
            }

            if ($fieldEmpty > 0) {
                $errors[] = 'Tous les champs ne sont pas remplis, '. $fieldEmpty . ' sont manquant(s).';
            }

            if(empty($errors)) {
                if($_GET['op'] == 'register') {
                    $dateDujour = new DateTime();
                    $user = new User;
                    $user->setUsername($_POST['username']);
                    $user->setEmail($_POST['email']);
                    $user->setMotDePasse($_POST['password']);
                    $user->setStatut('Admin');
                    $user->setCreatedAt($dateDujour->format('y/m/d'));

                    try {
                        $this->blogManager->insert($user);
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['email'] = $_POST['email'];
                        header('location: ?op=home');
                        exit();
                    }catch (Exception $e){
                        $e->getMessage();
                    }

                }
            }
        }

    }
}