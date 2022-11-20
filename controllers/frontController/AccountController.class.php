<?php
namespace controllers\frontController;

use services\account\accountService;

class AccountController
{
    public function __construct()
    {
        $this->accountService = new AccountService();
    }

    public function myAccount()
    {
        $id = $_SESSION['id'];
        $getInformationsAccount = $this->accountService->myAccount($id);
        require('./views/account.view.php');
    }
}