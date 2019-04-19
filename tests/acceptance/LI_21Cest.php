<?php 
use Step\Acceptance\LI_10Step as Step_10;
class LI_21Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I, $scenario)
    {
        $I = new Step_10($scenario);
        $I->LoginFuntion_10('leanhanh','leanhbb290109');
    }
}
