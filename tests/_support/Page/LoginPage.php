<?php
namespace Page;

class LoginPage
{
    // include url of current page
    public static $URL = '/log-in';
    public static $usernameField = '//*[@id="usernameOrEmail"]';
    public static $continueButton= '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';
    public static $continueGoogleButton='//*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[2]/div[2]/div/div/div/button';
    public static $creataHyper='//*[@id="primary"]/div/main/div[2]/div[2]/a[1]';
    public static $emailLoginLinkHyper='//*[@id="primary"]/div/main/div[2]/div[2]/a[2]';
    public static $lostPasswordHyper='//*[@id="primary"]/div/main/div[2]/div[2]/a[3]';
    public static $backHyper='//*[@id="primary"]/div/main/div[2]/div[2]/a[3]';
    public static $passwordField='//*[@id="password"]';
    public static $loginButton='//*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[1]/div[2]/button';
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }
}
