<?php
namespace Step\Acceptance;
use Page\LoginPage as login_Page;
class LI_12Step extends \AcceptanceTester
{
    public function LoginFution_12($username,$password){
        $I=$this;
        $I->amOnPage(Login_Page::$URL);
        $I->fillField(Login_Page::$usernameField);
        $I->click(Login_Page::$continueButton);
        $I->wait(2);
        $I->fillField(Login_Page::$passwordField);
        $I->click(Login_Page::$loginButton);
        $I->wait(2);
    }
}