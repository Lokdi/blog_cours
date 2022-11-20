<?php


namespace controllers\frontController;


use services\home\GetPostService;
use services\home\GetPostsService;

class GetPostsController
{
    public function __construct()
    {
        $this->getPostService = new GetPostService;
        $this->getPostsService = new GetPostsService;
    }

    public function getPosts()
    {
        $this->getPostsService->getPosts();
    }

    public function getPost($id)
    {
        $this->getPostService->getPost($id);
    }
}