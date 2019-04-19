<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;

class LoginFT extends \AcceptanceTester
{
    public function LoginFuntion($name,$password){
        $I=$this;
        $I->amOnPage(Login_Page::$URL);
        $I->fillField(Login_Page::$usernameField);
        $I->click(Login_Page::$continueButton);
        $I->wait(5);
        $I->fillField(Login_Page::$passwordField);
        $I->click(Login_Page::$loginButton);
        $I->wait(5);
        $I->see('Reader');
    }
}