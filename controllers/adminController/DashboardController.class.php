<?php
namespace controllers\adminController;

use services\gestionPosts\GestionPosts;

class DashboardController
{
    public function __construct()
    {
        $this->getPostsController = new GetPostsController;
    }

    public function homeDashboard()
    {
        $allPosts = $this->getPostsController->getPosts();
        require('./views/dashboard/homepage.view.php');
    }


}