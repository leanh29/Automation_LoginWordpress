<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_03Step extends \AcceptanceTester
{
    public function LoginFuntion_03($name){
        $I = $this;
        $I ->click(Login_Page::$usernameField);
    }
}