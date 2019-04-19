<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_02Step extends \AcceptanceTester
{
    public function LoginFuntion_02($password){
        $I = $this;
        $I ->fillField(Login_Page::$passwordField);
        $I ->click(Login_Page::$loginButton);
        $I ->wait(2);
}
}