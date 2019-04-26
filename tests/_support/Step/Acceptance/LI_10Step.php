<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_10Step extends \AcceptanceTester
{
    public function LoginFuntion_10($username, $password){
        $I = $this;
        $I ->amOnPage(Login_Page::$URL);
        $I->fillField(Login_Page::$usernameField, $username);
        $I->click(Login_Page::$continueButton);
        $I->wait(2);
        $I->fillField(Login_Page::$passwordField, $password);
        $I->click(Login_Page::$loginButton);
        $I->wait(2);
        $I->see('Reader');
        $I->closeTab();
        $I->amOnPage(Login_Page::$URL);
    }
}