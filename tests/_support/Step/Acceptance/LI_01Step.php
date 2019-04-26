<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_01Step extends \AcceptanceTester
{
    /**
     * @param $name
     */
    public function LoginFuntion_01($username){
        $I = $this;
        $I ->amOnPage(Login_Page::$URL);
        $I ->fillField(Login_Page::$usernameField, $username);
        $I ->click(Login_Page::$continueButton);
        $I ->wait(2);
    }
}