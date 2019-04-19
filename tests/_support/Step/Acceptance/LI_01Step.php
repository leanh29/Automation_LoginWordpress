<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_01Step extends \AcceptanceTester
{
    public function LoginFuntion_01($name){
        $I = $this;
        $I ->amOnPage(Login_Page::$URL);
        $I ->fillField(Login_Page::$usernameField);
        $I ->click(Login_Page::$continueButton);
        $I ->wait(2);
    }
}