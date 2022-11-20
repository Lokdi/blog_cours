<?php
namespace controllers\adminController;


use models\dashboard\BlogManagerDashboard;

class GetPostsController
{
    public function __construct()
    {
        $this->blogManagerDashboard = new BlogManagerDashboard;
    }

    public function getPosts()
    {
        return $this->blogManagerDashboard->selectAllPosts();
    }
}