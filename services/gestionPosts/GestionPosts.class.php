<?php


namespace services\gestionPosts;

use models\dashboard\BlogManagerDashboard;

class GestionPosts
{

    public function __construct()
    {
        $this->blogManagerDashboard = new BlogManagerDashboard();
    }

    public function deletePost($id)
    {
         return $this->blogManagerDashboard->deletePostById($id);

    }
}