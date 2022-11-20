<?php
namespace services\account;

use models\BlogManager;

class accountService
{
    public function __construct()
    {
        $this->blogManager = new BlogManager;
    }

    public function myAccount($id)
    {
//        $this->blogManager->update($_POST);
        return $this->blogManager->selectUserById($id);
    }
}