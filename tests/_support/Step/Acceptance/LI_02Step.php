<?php
namespace Step\Acceptance;
use Page\LoginPage as Login_Page;
class LI_02Step extends \AcceptanceTester
{
    public function LoginFuntion_02($password){
        $I = $this;
        $I ->fillField(Login_Page::$passwordField, $password);
        $I ->click(Login_Page::$loginButton);
        $I ->acceptPopup();
        $I ->cancelPopup();
        $I ->wait(2);
        $I ->doAdministratorLogout();
    }
}
