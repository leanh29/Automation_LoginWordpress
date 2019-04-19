<?php
use Step\Acceptance\LI_01Step as Step_01;
class LI_01Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new Step_01($scenario);
        $I ->LoginFuntion_01('leanhLogin_Funtionanh','leanhbb290109');
    }
}
