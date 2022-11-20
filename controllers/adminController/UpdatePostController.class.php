<?php


namespace controllers\adminController;


use services\gestionPosts\UpdatePostService;

class UpdatePostController
{
    public function __construct()
    {
        $this->updatePostService = new UpdatePostService;
    }

    public function updatePost()
    {
        $this->updatePostService->update();
    }
}