<?php
namespace controllers\adminController;

use services\gestionPosts\GestionPosts;

class DeletePostController
{
    public function __construct()
    {
        $this->gestionPosts = new GestionPosts;
    }

    public function deletePost()
    {
        if ($_GET['op'] == 'deletePost' && !empty($_GET['id']) && is_numeric($_GET['id'])) {
            $this->gestionPosts->deletePost($_GET['id']);
        }
    }
}