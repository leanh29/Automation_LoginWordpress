<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_11Step extends \AcceptanceTester
{
    public function LoginFuntion_11($username, $password){
        $I = $this;
        $I->amOnPage(Login_Page::$URL);
        $I->fillField(Login_Page::$usernameField);
        $I->click(Login_Page::$continueButton);
        $I->wait(2);
        $I->fillField(Login_Page::$passwordField);
        $I->click(Login_Page::$loginButton);
        $I->wait(2);
        $I->see('Reader');
        $I->reloadPage();
    }

}