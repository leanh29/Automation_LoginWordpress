<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_08Step extends \AcceptanceTester
{
    public function LoginFuntion_08(){
        $I = $this;
        $I ->amOnPage(Login_Page::$URL);
        $I ->moveMouseOver(Login_Page::$creataHyper);
    }
}