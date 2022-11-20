<?php
namespace services\home;

use models\dashboard\BlogManagerDashboard;

class GetPostsService
{
    public function __construct()
    {
        $this->blogManagerDashboard = new BlogManagerDashboard;
    }

    public function getPosts()
    {
        $allPosts = $this->blogManagerDashboard->selectAllPostsLimitFive();
        require('./views/homepage.view.php');
    }
}