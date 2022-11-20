<?php

namespace services\home;


use models\BlogManager;

class GetPostService
{
    public function __construct()
    {
        $this->blogManager = new BlogManager;
    }

    public function getPost($id)
    {
        $post = $this->blogManager->selectPostById($id);
        require('./views/post.view.php');
    }
}