<?php 
use Step\Acceptance\LI_01Step as Step_01;
class LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I,$scenario)
    {
        $I = new Step_01($scenario);
        $I ->LoginFuntion_01('https://wordpress.com/log-in');
    }
}
